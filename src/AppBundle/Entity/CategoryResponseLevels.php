<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryResponseLevels
 *
 * @ORM\Table(name="category_response_levels")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryResponseLevelsRepository")
 */
class CategoryResponseLevels
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
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="response_level_id", type="integer")
     */
    private $responseLevelId;

    /**
     * @var string
     *
     * @ORM\Column(name="response_text", type="string", length=255)
     */
    private $responseText;


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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return CategoryResponseLevels
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set responseLevelId
     *
     * @param integer $responseLevelId
     *
     * @return CategoryResponseLevels
     */
    public function setResponseLevelId($responseLevelId)
    {
        $this->responseLevelId = $responseLevelId;

        return $this;
    }

    /**
     * Get responseLevelId
     *
     * @return int
     */
    public function getResponseLevelId()
    {
        return $this->responseLevelId;
    }

    /**
     * Set responseText
     *
     * @param string $responseText
     *
     * @return CategoryResponseLevels
     */
    public function setResponseText($responseText)
    {
        $this->responseText = $responseText;

        return $this;
    }

    /**
     * Get responseText
     *
     * @return string
     */
    public function getResponseText()
    {
        return $this->responseText;
    }
}

