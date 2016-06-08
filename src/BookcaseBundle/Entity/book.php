<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\bookRepository")
 */
class book
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published", type="datetime")
     */
    private $published;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_chapter", type="integer")
     */
    private $nbChapter;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_page", type="integer", nullable=true)
     */
    private $nbPage;

    /**
     * @var binary
     *
     * @ORM\Column(name="cover", type="binary", nullable=true)
     */
    private $cover;


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
     * Set name
     *
     * @param string $name
     * @return book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set published
     *
     * @param \DateTime $published
     * @return book
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return \DateTime 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set nbChapter
     *
     * @param integer $nbChapter
     * @return book
     */
    public function setNbChapter($nbChapter)
    {
        $this->nbChapter = $nbChapter;

        return $this;
    }

    /**
     * Get nbChapter
     *
     * @return integer 
     */
    public function getNbChapter()
    {
        return $this->nbChapter;
    }

    /**
     * Set nbPage
     *
     * @param integer $nbPage
     * @return book
     */
    public function setNbPage($nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    /**
     * Get nbPage
     *
     * @return integer 
     */
    public function getNbPage()
    {
        return $this->nbPage;
    }

    /**
     * Set cover
     *
     * @param binary $cover
     * @return book
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return binary 
     */
    public function getCover()
    {
        return $this->cover;
    }
}
