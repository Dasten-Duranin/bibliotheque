<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @ORM\Column(name="category_name", type="string", length=255, unique=true)
     */
    private $categoryName;
    /**
     * @var arrayCollection
     * 
     * @ORM\ManyToOne(targetEntity="BookcaseBundle\Entity\Books", inversedBy="category")
     */
    private $books;
    
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
     * Set categoryName
     *
     * @param string $categoryName
     * @return Categories
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set books
     *
     * @param \BookcaseBundle\Entity\Books $books
     * @return Categories
     */
    public function setBooks(\BookcaseBundle\Entity\Books $books = null)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books
     *
     * @return \BookcaseBundle\Entity\Books 
     */
    public function getBooks()
    {
        return $this->books;
    }
}
