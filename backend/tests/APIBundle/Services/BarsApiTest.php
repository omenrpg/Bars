<?php

namespace APIBundle\Tests\Services;

use APIBundle\Exceptions\GoogleApiException;
use APIBundle\Services\BarsApi;
use APIBundle\Services\Factories\GooglePlaceApi;
use GuzzleHttp\Client;
use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class BarsApiTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var GooglePlaceApi
     */
    private $googlePlaceApi;
    /**
     * @var BarsApi
     */
    private $sut;

    public function setUp()
    {
        $this->googlePlaceApi = $this->prophesize(GooglePlaceApi::class);
        $this->sut = new BarsApi($this->googlePlaceApi->reveal());
    }

    /**
     * @test
     */
    public function it_should_do_call_to_google_api()
    {
        $returnedBody = $this->getStreamMock();
        $response = $this->getResponseMock($returnedBody);
        $client = $this->getClientMock($response);

        $this->googlePlaceApi->generateClientNearbySearch(Argument::type('array'))
            ->willReturn($client)
            ->shouldBeCalled();
        $client->get('')->shouldBeCalled();

        $this->sut->getBars();
    }

    /**
     * @test
     */
    public function it_should_do_call_with_recursion_to_google_api()
    {
        $returnedBody = $this->getStreamMock('OK', 'somePageTOken');
        $response = $this->getResponseMock($returnedBody);
        $client = $this->getClientMock($response);

        $this->googlePlaceApi->generateClientNearbySearch(Argument::type('array'))
            ->willReturn($client)
            ->shouldBeCalledTimes(2);
        $client->get('')->shouldBeCalledTimes(2);

        $this->sut->getBars();
    }

    /**
     * @test
     */
    public function it_should_throw_exception_when_wrong_status_code_is_returned()
    {
        $this->expectException(GoogleApiException::class);
        $returnedBody = $this->getStreamMock();
        $response = $this->getResponseMock($returnedBody, 400);
        $client = $this->getClientMock($response);

        $this->googlePlaceApi->generateClientNearbySearch(Argument::type('array'))
            ->willReturn($client)
            ->shouldBeCalled();
        $client->get('')->shouldBeCalled();

        $this->sut->getBars();
    }

    /**
     * @test
     */
    public function it_should_throw_exception_when_wrong_status_is_returned_in_body()
    {
        $this->expectException(GoogleApiException::class);
        $returnedBody = $this->getStreamMock("OVER_QUERY_LIMIT");
        $response = $this->getResponseMock($returnedBody);
        $client = $this->getClientMock($response);

        $this->googlePlaceApi->generateClientNearbySearch(Argument::type('array'))
            ->willReturn($client)
            ->shouldBeCalled();
        $client->get('')->shouldBeCalled();

        $this->sut->getBars();
    }

    /**
     * @param ObjectProphecy $returnedBody
     * @param int $statusCode
     * @return ObjectProphecy
     */
    public function getResponseMock(ObjectProphecy $returnedBody, int $statusCode = 200):ObjectProphecy
    {
        $response = $this->prophesize(ResponseInterface::class);
        $response->getStatusCode()->willReturn($statusCode);
        $response->getBody()->willReturn($returnedBody->reveal());

        return $response;
    }

    /**
     * @param string $status
     * @param string $pageToken
     * @return ObjectProphecy
     */
    public function getStreamMock(string $status = 'OK', string $pageToken = ''):ObjectProphecy
    {
        $returnedBody = $this->prophesize(StreamInterface::class);
        $returnedBody->getContents()
            ->willReturn('{"results": [], "status": "'.$status.'", "next_page_token": "'.$pageToken.'"}',
                '{"results": [], "status": "OK", "next_page_token": ""}');

        return $returnedBody;
    }

    /**
     * @param ObjectProphecy $response
     * @return ObjectProphecy
     */
    public function getClientMock(ObjectProphecy $response):ObjectProphecy
    {
        $client = $this->prophesize(Client::class);
        $client->get('')->willReturn($response->reveal());

        return $client;
    }
}
