<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="question_text", type="string", length=255)
     */
    private $questionText;

    /**
     * @var int
     *
     * @ORM\Column(name="question_category_id", type="integer")
     */
    private $questionCategoryId;


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
     * Set questionText
     *
     * @param string $questionText
     *
     * @return Questions
     */
    public function setQuestionText($questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Get questionText
     *
     * @return string
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Set questionCategoryId
     *
     * @param integer $questionCategoryId
     *
     * @return Questions
     */
    public function setQuestionCategoryId($questionCategoryId)
    {
        $this->questionCategoryId = $questionCategoryId;

        return $this;
    }

    /**
     * Get questionCategoryId
     *
     * @return int
     */
    public function getQuestionCategoryId()
    {
        return $this->questionCategoryId;
    }
}

