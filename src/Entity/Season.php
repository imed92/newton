<?php

namespace App\Entity;

use App\Repository\SeasonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SeasonRepository::class)
 */
class Season
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     * @Groups({"get_movies_collection", "get_movies_item"})
     */
    private $number;

    /**
     * @ORM\Column(type="smallint")
     * @Groups({"get_movies_collection", "get_movies_item"})
     */
    private $episodesNumber;

    /**
     * "Many Season To One Movie"
     * @ORM\ManyToOne(targetEntity=Movie::class, inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $movie; // objet de type Movie en PHP => movie_id en SQL

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getEpisodesNumber(): ?int
    {
        return $this->episodesNumber;
    }

    public function setEpisodesNumber(int $episodesNumber): self
    {
        $this->episodesNumber = $episodesNumber;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(?Movie $movie): self
    {
        $this->movie = $movie;

        return $this;
    }
}
