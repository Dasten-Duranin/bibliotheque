<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\BooksRepository")
 */
class Books
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
     * @ORM\Column(name="book_name", type="string", length=255)
     */
    private $bookName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_date", type="date", nullable=true)
     */
    private $publishDate;

    /**
     * @var int
     *
     * @ORM\Column(name="chapters", type="integer", nullable=true)
     */
    private $chapters;

    /**
     * @var int
     *
     * @ORM\Column(name="pages", type="integer", nullable=true)
     */
    private $pages;

    /**
     * @var binary
     *
     * @ORM\Column(name="cover", type="binary")
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
     * Set bookName
     *
     * @param string $bookName
     * @return Books
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;

        return $this;
    }

    /**
     * Get bookName
     *
     * @return string 
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * Set publishDate
     *
     * @param \DateTime $publishDate
     * @return Books
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * Get publishDate
     *
     * @return \DateTime 
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * Set chapters
     *
     * @param integer $chapters
     * @return Books
     */
    public function setChapters($chapters)
    {
        $this->chapters = $chapters;

        return $this;
    }

    /**
     * Get chapters
     *
     * @return integer 
     */
    public function getChapters()
    {
        return $this->chapters;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Books
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set cover
     *
     * @param binary $cover
     * @return Books
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
