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
     * @ORM\Column(name="chapters_number", type="integer", nullable=true)
     */
    private $chapters_number;

    /**
     * @var int
     *
     * @ORM\Column(name="pages_number", type="integer", nullable=true)
     */
    private $pages_number;

    /**
     * @var binary
     *
     * @ORM\Column(name="cover", type="binary")
     */
    private $cover;

    /**
     * @var arrayCollection
     *
     * @ORM\ManyToMany(targetEntity="BookcaseBundle\Entity\Authors", mappedBy="books")
     */
    private $authors;

    /**
     * @var arrayCollection
     *
     * @ORM\OneToMany(targetEntity="BookcaseBundle\Entity\Chapters", mappedBy="book")
     */
    private $chapters;

    /**
     * @var arrayCollection
     *
     * @ORM\ManyToMany(targetEntity="BookcaseBundle\Entity\Genres", mappedBy="books")
     */
    private $genres;
	/**
	 * @var arrayCollectipon
	 *
	 * @ORM\OneToMany(targetEntity="BookcaseBundle\Entity\Categories", mappedBy="books")
	 */
    private $category;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->autors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add autors
     *
     * @param \BookcaseBundle\Entity\Autors $autors
     * @return Books
     */
    public function addAutor(\BookcaseBundle\Entity\Autors $autors)
    {
        $this->autors[] = $autors;

        return $this;
    }

    /**
     * Remove autors
     *
     * @param \BookcaseBundle\Entity\Autors $autors
     */
    public function removeAutor(\BookcaseBundle\Entity\Autors $autors)
    {
        $this->autors->removeElement($autors);
    }

    /**
     * Get autors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAutors()
    {
        return $this->autors;
    }

    /**
     * Set chapters_number
     *
     * @param integer $chaptersNumber
     * @return Books
     */
    public function setChaptersNumber($chaptersNumber)
    {
        $this->chapters_number = $chaptersNumber;

        return $this;
    }

    /**
     * Get chapters_number
     *
     * @return integer 
     */
    public function getChaptersNumber()
    {
        return $this->chapters_number;
    }

    /**
     * Set pages_number
     *
     * @param integer $pagesNumber
     * @return Books
     */
    public function setPagesNumber($pagesNumber)
    {
        $this->pages_number = $pagesNumber;

        return $this;
    }

    /**
     * Get pages_number
     *
     * @return integer 
     */
    public function getPagesNumber()
    {
        return $this->pages_number;
    }

    /**
     * Add authors
     *
     * @param \BookcaseBundle\Entity\Authors $authors
     * @return Books
     */
    public function addAuthor(\BookcaseBundle\Entity\Authors $authors)
    {
        $this->authors[] = $authors;

        return $this;
    }

    /**
     * Remove authors
     *
     * @param \BookcaseBundle\Entity\Authors $authors
     */
    public function removeAuthor(\BookcaseBundle\Entity\Authors $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add chapters
     *
     * @param \BookcaseBundle\Entity\Chapters $chapters
     * @return Books
     */
    public function addChapter(\BookcaseBundle\Entity\Chapters $chapters)
    {
        $this->chapters[] = $chapters;

        return $this;
    }

    /**
     * Remove chapters
     *
     * @param \BookcaseBundle\Entity\Chapters $chapters
     */
    public function removeChapter(\BookcaseBundle\Entity\Chapters $chapters)
    {
        $this->chapters->removeElement($chapters);
    }

    /**
     * Add genres
     *
     * @param \BookcaseBundle\Entity\Genres $genres
     * @return Books
     */
    public function addGenre(\BookcaseBundle\Entity\Genres $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \BookcaseBundle\Entity\Genres $genres
     */
    public function removeGenre(\BookcaseBundle\Entity\Genres $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Add category
     *
     * @param \BookcaseBundle\Entity\Categories $category
     * @return Books
     */
    public function addCategory(\BookcaseBundle\Entity\Categories $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \BookcaseBundle\Entity\Categories $category
     */
    public function removeCategory(\BookcaseBundle\Entity\Categories $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
