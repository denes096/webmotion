<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/order');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'order/list');
    }

}
