<?php

namespace App\Controller\Api;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use App\Service\MySlugger;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiMovieController extends AbstractController
{
    /**
     * Get movies collections
     * 
     * @Route("/api/movies", name="api_movies_get", methods={"GET"})
     */
    public function getCollection(MovieRepository $movieRepository)
    {
        // @todo : retourner les films de la BDD
        
        // On va chercher les données
        $moviesList = $movieRepository->findAll();

        return $this->json(
            // Ici les données a serialiser (a convertir en json)
            $moviesList,
            // Ici le status code
            200,
            // Le header
            [],
            // Les groupes a utiliser pour serialiser
            ['groups' => 'get_movies_collection']
        );
    }

    /**
     * Requete pour chercher un Item
     *
     * @Route("/api/movies/{id<\d+>}", name="api_movies_get_item", methods={"GET"})
     */
    public function getItem(Movie $movie = null)
    {
        if ($movie === null) {
            return $this->json(
                ['error' => 'Film non trouvé !'],
                Response::HTTP_NOT_FOUND,
                ['Authorization' => 'blablabla']
            );
        }
        return $this->json(
            $movie,
            200,
            [],
            ['groups' => 'get_movies_item']
        );
    }

    /**
     * @Route("api/movies/random", name="api_movies_get_item_random", methods={"GET"})
     */
    public function getItemRandom(MovieRepository $movieRepository)
    {
        // On va chercher le film random
        // Pour se faire, utiliser findOneRandomMovie()
        // Qui est dans MovieRepository
        $randomMovie = $movieRepository->findOneRandomMovieDQL();
        // $randomMovie = $movieRepository->findOneRandomMovie();

        return $this->json(
            $randomMovie,
            Response::HTTP_OK,
            [],
            ['groups' => 'get_movies_item']
        );
    }

    /**
     * @Route("/api/secure/movies", name="api_movies_post", methods={"POST"})
     */
    public function createItem(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine, MySlugger $mySlugger, ValidatorInterface $validator)
    {
        // On recuperer le json
        $jsonContent = $request->getContent();

        try {
            // On deserialize (convertir) le json en entité movie
            $movie = $serializer->deserialize($jsonContent, Movie::class, 'json');
        } catch (NotEncodableValueException $e) {
            return $this->json(
                ["error" => 'JSON INVALIDE'],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        // Valider l'entité recu
        $errors = $validator->validate($movie);

        // On check le nombre d'erreur
        if (count($errors) > 0)
            return $this->json($errors, Response::HTTP_UNPROCESSABLE_ENTITY);

        // On sauvegarde l'entité
        $entityManager = $doctrine->getManager();
        // Ici on slugifie le titre pr la colonne slug
        $movie->setSlug($mySlugger->slugify($movie->getTitle()));
        $entityManager->persist($movie);
        $entityManager->flush();

        // On retorune la reponse adapté

        return $this->json(
            // Le film crée
            $movie,
            // Le status code 201 : CREATED
            Response::HTTP_CREATED,
            [
                // Location = /api/movies/{id_du_film_crée}
                'Location' => $this->generateUrl('api_movies_get_item', ['id' => $movie->getId()])
            ],
            ['groups' => 'get_movies_item']
        );
    }

    /**
     * Get one movie item
     * 
     * ...
     * 
     */
}
