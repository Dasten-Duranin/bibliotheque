<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapters
 *
 * @ORM\Table(name="chapters")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\ChaptersRepository")
 */
class Chapters
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
     * @ORM\Column(name="chapter_name", type="string", length=255)
     */
    private $chapterName;

    /**
     * @var int
     *
     * @ORM\Column(name="chapter_number", type="integer")
     */
    private $chapterNumber;
    /**
     * @var arrayCollection
     *
     * @ORM\ManyToOne(targetEntity="BookcaseBundle\Entity\Books", inversedBy="chapters")
     */
    private $book;
    /**
     * @var arrayCollection
     *
     * @ORM\OneToMany(targetEntity="BookcaseBundle\Entity\Pages", mappedBy="chapter")
     */
    private $pages;

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
     * Set chapterName
     *
     * @param string $chapterName
     * @return Chapters
     */
    public function setChapterName($chapterName)
    {
        $this->chapterName = $chapterName;

        return $this;
    }

    /**
     * Get chapterName
     *
     * @return string 
     */
    public function getChapterName()
    {
        return $this->chapterName;
    }

    /**
     * Set chapterNumber
     *
     * @param integer $chapterNumber
     * @return Chapters
     */
    public function setChapterNumber($chapterNumber)
    {
        $this->chapterNumber = $chapterNumber;

        return $this;
    }

    /**
     * Get chapterNumber
     *
     * @return integer 
     */
    public function getChapterNumber()
    {
        return $this->chapterNumber;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set book
     *
     * @param \BookcaseBundle\Entity\Books $book
     * @return Chapters
     */
    public function setBook(\BookcaseBundle\Entity\Books $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \BookcaseBundle\Entity\Books 
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Add pages
     *
     * @param \BookcaseBundle\Entity\Pages $pages
     * @return Chapters
     */
    public function addPage(\BookcaseBundle\Entity\Pages $pages)
    {
        $this->pages[] = $pages;

        return $this;
    }

    /**
     * Remove pages
     *
     * @param \BookcaseBundle\Entity\Pages $pages
     */
    public function removePage(\BookcaseBundle\Entity\Pages $pages)
    {
        $this->pages->removeElement($pages);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPages()
    {
        return $this->pages;
    }
}
