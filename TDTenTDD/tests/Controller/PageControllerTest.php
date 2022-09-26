<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PageControllerTest extends WebTestCase{

    public function testHelloPage()
    {
        $client = static::createClient();
        $client->request('GET', '/hello');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testTitleHelloPage()
    {
        $client = static::createClient();
        $client->request('GET', '/hello');
        $this->assertSelectorTextContains('h1', 'Titre');
    }

    public function testTitleAuthPage()
    {
        $client = static::createClient();
        $client->request('GET', '/auth');
        $this->assertSelectorTextContains('h1', 'Authentification');
    }

    public function testAuthPageIsRestricted()
    {
        $client = static::createClient();
        $client->request('GET', '/auth');
        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);
    }

}
