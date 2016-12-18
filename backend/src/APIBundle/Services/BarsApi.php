<?php

namespace APIBundle\Services;


use APIBundle\Exceptions\GoogleApiException;
use APIBundle\Services\Factories\GooglePlaceApi;

class BarsApi
{
    const DEFAULT_POSITION = '54.3495717,18.6522085';
    const RADIUS = 2000;
    const TYPE = 'bar';
    const STATUS_OK = 'OK';

    /**
     * @var GooglePlaceApi
     */
    private $googlePlaceApi;

    /**
     * BarsApi constructor.
     * @param GooglePlaceApi $googlePlaceApi
     */
    public function __construct(GooglePlaceApi $googlePlaceApi)
    {
        $this->googlePlaceApi = $googlePlaceApi;
    }

    /**
     * @param string|null $position
     * @return array
     */
    public function getBars(string $position = null) : array
    {
        $bars = $this->retrieveBarsFromApi([
            'location' => $position ?: self::DEFAULT_POSITION,
            'radius' => self::RADIUS,
            'type' => self::TYPE,
        ]);

        $pageToken = $bars['next_page_token'];
        while(!empty($pageToken)) {
            sleep(2);
            $nextBars = $this->retrieveBarsFromApi(['pagetoken' => $pageToken]);
            $bars['results'] = array_merge($bars['results'], $nextBars['results']);
            $pageToken = $nextBars['next_page_token'] ?? null;
        }

        return $bars['results'];
    }

    /**
     * @param array $queryParams
     * @return array
     * @throws GoogleApiException
     */
    private function retrieveBarsFromApi(array $queryParams) : array
    {
        $client = $this->googlePlaceApi->generateClientNearbySearch($queryParams);
        $response = $client->get('');

        if($response->getStatusCode() !== 200) {
            throw new GoogleApiException("Wrong status code: " . $response->getStatusCode());
        }
        $result = json_decode($response->getBody()->getContents(), true);

        if ($result['status'] !== self::STATUS_OK) {
            throw new GoogleApiException("Not expected result: " . $result['status']);
        }

        return $result;
    }
}