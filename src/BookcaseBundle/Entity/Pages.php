<?php

namespace BookcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity(repositoryClass="BookcaseBundle\Repository\PagesRepository")
 */
class Pages
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
     * @var int
     *
     * @ORM\Column(name="page_number", type="integer")
     */
    private $pageNumber;
    /**
     * @var arrayCollection
     *
     * @ORM\ManyToOne(targetEntity="BookcaseBundle\Entity\Chapters", inversedBy="pages")
     */
    private $chapter;

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
     * Set pageNumber
     *
     * @param integer $pageNumber
     * @return Pages
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * Get pageNumber
     *
     * @return integer 
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Set chapter
     *
     * @param \BookcaseBundle\Entity\Chapters $chapter
     * @return Pages
     */
    public function setChapter(\BookcaseBundle\Entity\Chapters $chapter = null)
    {
        $this->chapter = $chapter;

        return $this;
    }

    /**
     * Get chapter
     *
     * @return \BookcaseBundle\Entity\Chapters 
     */
    public function getChapter()
    {
        return $this->chapter;
    }
}
