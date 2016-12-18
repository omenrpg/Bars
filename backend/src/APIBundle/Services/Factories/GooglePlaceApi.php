<?php

namespace APIBundle\Services\Factories;


use GuzzleHttp\Client;

class GooglePlaceApi
{
    const SEARCH_URI = '/nearbysearch/json';

    private $googleApiConfig;

    /**
     * GooglePlaceApi constructor.
     * @param array $googleApiConfig
     */
    public function __construct(array $googleApiConfig)
    {
        $this->googleApiConfig = $googleApiConfig;
    }

    /**
     * @param array $query
     * @return Client
     */
    public function generateClientNearbySearch(array $query) : Client
    {
        $query['key'] = $this->googleApiConfig['google_api_key'];
        return new Client([
            'base_uri' => $this->googleApiConfig['google_base_uri'] . self::SEARCH_URI,
            'query' => $query,
        ]);
    }
}