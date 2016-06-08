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
}
