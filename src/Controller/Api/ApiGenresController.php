<?php

namespace App\Controller\Api;

use App\Entity\Genre;
use App\Repository\GenreRepository;
use App\Repository\MovieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiGenresController extends AbstractController
{
    /**
     * @Route("/api/genres", name="api_genres_get", methods={"GET"})
     */
    public function getCollection(GenreRepository $genreRepository): Response
    {
        $genreList = $genreRepository->findAll();

        return $this->json(
            $genreList, 
            Response::HTTP_OK, 
            [],
            ['groups' => 'get_genres_collection']
        );
    }

    /**
     * @Route("api/genres/{id<\d+>}/movies", name="api_genres_get_movies", methods={"GET"})
     */
    public function getItemAndMovies(Genre $genre = null, MovieRepository $movieRepository)
    {
        // Ici grace a la methode getMovies qui
        // est dans l'entity Genre, on va recuperer
        // la liste d'un film en fonction d'un genre
        if ($genre === null) {
            return $this->json(
                ['error' => 'Genre non trouvé !'],
                Response::HTTP_NOT_FOUND
            );
        }
        $moviesList = $genre->getMovies();

        $data = [
            "genre" => $genre,
            "movies" => $moviesList
        ];
        return $this->json(
            $data,
            Response::HTTP_OK,
            [],
            [
                'groups' => [
                    // les films
                    'get_movies_collection',
                    // le groupe des genres
                    'get_genre_collection'
                ]
            ]);
    }
}