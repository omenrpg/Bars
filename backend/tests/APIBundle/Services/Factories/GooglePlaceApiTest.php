<?php

namespace APIBundle\Tests\Services\Factories;
use APIBundle\Services\Factories\GooglePlaceApi;
use GuzzleHttp\Client;
use PHPUnit_Framework_TestCase;

class GooglePlaceApiTest extends PHPUnit_Framework_TestCase
{
    const SOME_TEST_KEY = 'someTestKey';
    const HTTP_SOME_WEB = 'http://some.web';
    /**
     * @var GooglePlaceApi
     */
    private $sut;

    public function setUp()
    {
        $googlesConfig = [
            'google_api_key' => self::SOME_TEST_KEY,
            'google_base_uri' => '' . self::HTTP_SOME_WEB . '',
        ];
        $this->sut = new GooglePlaceApi($googlesConfig);
    }

    /**
     * @test
     */
    public function it_should_generate_api_client_for_nearbysearch()
    {
        $client = $this->sut->generateClientNearbySearch(['newField' => 'value']);

        $this->assertInstanceOf(Client::class, $client);
        $config = $client->getConfig();
        $this->assertArrayHasKey('base_uri', $config);
        $this->assertArrayHasKey('query', $config);
        $this->assertEquals(self::SOME_TEST_KEY, $config['query']['key']);
        $this->assertEquals('value', $config['query']['newField']);
    }
}
