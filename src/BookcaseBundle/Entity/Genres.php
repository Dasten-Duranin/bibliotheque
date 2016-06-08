<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="genres")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\GenresRepository")
 */
class Genres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_name", type="string", length=255, unique=true)
     */
    private $genreName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genreName
     *
     * @param string $genreName
     * @return Genres
     */
    public function setGenreName($genreName)
    {
        $this->genreName = $genreName;

        return $this;
    }

    /**
     * Get genreName
     *
     * @return string 
     */
    public function getGenreName()
    {
        return $this->genreName;
    }
}
