<?php

namespace APIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BarsControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function it_checks_does_endpoint_exist_and_return_json()
    {
        $client = static::createClient();
        $client->request('GET', '/api/v1/bars.json');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $returnedData = json_decode($client->getResponse()->getContent());
        $this->assertEquals(true, is_array($returnedData));
    }
}
