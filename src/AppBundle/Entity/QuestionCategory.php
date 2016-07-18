<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionCategory
 *
 * @ORM\Table(name="question_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionCategoryRepository")
 */
class QuestionCategory
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
     * @ORM\Column(name="category_name", type="string", length=255)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_letter", type="string", length=10, unique=true)
     */
    private $categoryLetter;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return QuestionCategory
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
     * Set categoryLetter
     *
     * @param string $categoryLetter
     *
     * @return QuestionCategory
     */
    public function setCategoryLetter($categoryLetter)
    {
        $this->categoryLetter = $categoryLetter;

        return $this;
    }

    /**
     * Get categoryLetter
     *
     * @return string
     */
    public function getCategoryLetter()
    {
        return $this->categoryLetter;
    }
}

