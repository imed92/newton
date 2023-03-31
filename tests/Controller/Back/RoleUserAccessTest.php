<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoleUserAccessTest extends WebTestCase
{
     /**
     * Test de routes en method POST
     *
     * @dataProvider postUrls
     */
    public function testPostUrls($url): void
    {
        $client = static::createClient();
        // $client->followRedirects(true);
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('user@user.com');
        $client->loginUser($testUser);
        $crawler = $client->request('POST', $url);

        $this->assertResponseStatusCodeSame(403);
        // $this->assertSelectorTextContains('h1', 'Access Denied');
    }

    public function postUrls()
    {
        // yield est un générateur qui permet d'envoyer des urls, toutes nos url dans l'argument dans le prototype de la methode qui apelle les urls, ne pas oublier @dataProvider postUrls
        yield['/back/movie/1/edisst'];
        yield['/back/movie/new'];
        yield['/back/user/new'];
        yield['/back/user/1/edit'];
    }

}
