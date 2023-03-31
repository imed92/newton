<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AnonymousAccessTest extends WebTestCase
{

    /**
     * Test de routes en method POST
     *
     * @dataProvider postUrls
     */
    public function testPostUrls($url): void
    {
        $client = static::createClient();
        $crawler = $client->request('POST', $url);

        $this->assertResponseStatusCodeSame(302);
        $this->assertSelectorTextContains('title', 'Redirecting to http://localhost/login');
    }

    public function postUrls()
    {
        // yield est un générateur qui permet d'envoyer des urls, toutes nos url dans l'argument dans le prototype de la methode qui apelle les urls, ne pas oublier @dataProvider postUrls
        yield['/back/movie/1/edit'];
        yield['/back/movie/new'];
        yield['/back/user/new'];
        yield['/back/user/1/edit'];
    }
}
