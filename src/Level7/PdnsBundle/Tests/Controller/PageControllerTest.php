<?php

namespace Level7\PdnsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testHomepage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
