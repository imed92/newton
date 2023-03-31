<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{

    public function testReviewAdd(): void
    {
        $client = static::createClient();

        // ici $userRepository = tous mes user
        $userRepository = static::getContainer()->get(UserRepository::class);
        // ici je recupere les id de l'user qui a "user@user.com" comme adresse mail
        $testUser = $userRepository->findOneByEmail('user@user.com');
        // ici on se connecte sur le client avec l'user de test $userTest
        $client->loginUser($testUser);
        // on load la page sur laquelle on veut faire notre test
        $crawler = $client->request('GET', '/movie/20/review/add');

        // on recupere le formulaire pour inserer un commentaire, le name du form est review et filter me permet de recuperer le contenu de la balise qui a name="review" 
        $form = $crawler->filter('form[name="review"]')->form();
        // $crawler->filter('#review_reactions_0')->tick();
        // ici on rempli le formulaire avec des datas de test
        $form['review[username]'] = "tototata";
        $form['review[email]'] = "imed@imed.com";
        $form['review[content]'] = "contencontenconten";
        $form['review[reactions]'] = ["smile"];
        $form['review[rating]'] = 5;
        $form['review[watchedAt][month]'] = '2';
        $form['review[watchedAt][day]'] = '23';
        $form['review[watchedAt][year]'] = '2023';

        $client->submit($form);

        $this->assertResponseIsSuccessful();
        // $this->assertResponseStatusCodeSame(302);
    }

    public function testAddMovieList(): void
    {
        $client = static::createClient();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('user@user.com');
        $client->loginUser($testUser);

        $client->request('GET', '/favorites/gestion/20');
        // la methode ci dessous attend un status code compris entre 200 et 299
        // $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(302);

    }

    public function testPurgeMovieList(): void
    {
        $client = static::createClient();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('user@user.com');
        $client->loginUser($testUser);

        $client->request('GET', '/favorites/gestion/purge');
        // la methode ci dessous attend un status code compris entre 200 et 299
        // $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(302);

    }


    public function testDeleteMovieList(): void
    {
        $client = static::createClient();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('user@user.com');
        $client->loginUser($testUser);
        $client->request('GET', '/favorites/gestion/20');
        // la methode ci dessous attend un status code compris entre 200 et 299
        // $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(302);

    }
    /*
     * Home
     */
    public function testHome(): void
    {
        // On créer un client
        $client = static::createClient();

        // On execute une requete HTTP en methode GET sur l'URL '/'
        $crawler = $client->request('GET', '/');

        // On check si on a un status code compris entre 200 et 299 (donc que la requete s'est bien passée)
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Films, séries TV et popcorn en illimité.');
    }

    /*
    * Movie Show
    */
    public function testMovieShow(): void
    {
        // On créer un client
        $client = static::createClient();

        // On execute une requete HTTP en methode GET sur l'URL '/'
        $crawler = $client->request('GET', '/movie/babe');

        // On check si on a un status code compris entre 200 et 299 (donc que la requete s'est bien passée)

        $this->assertResponseIsSuccessful();
    }
    // public function getUrls()
    //     {
    //         yield['/movie/in-the-name-of-the-father'];
    //         // yield['/movie/babe'];
    //         // yield['/movie/monsters-university'];
    //         // yield['/movie/my-girl'];
    //     }


}
