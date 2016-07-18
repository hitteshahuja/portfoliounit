<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponseLevels
 *
 * @ORM\Table(name="response_levels")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResponseLevelsRepository")
 */
class ResponseLevels
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
     * @ORM\Column(name="response_levels", type="string", length=255)
     */
    private $responseLevels;

    /**
     * @var int
     *
     * @ORM\Column(name="start_value", type="integer")
     */
    private $startValue;

    /**
     * @var int
     *
     * @ORM\Column(name="end_value", type="integer")
     */
    private $endValue;


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
     * Set responseLevels
     *
     * @param string $responseLevels
     *
     * @return ResponseLevels
     */
    public function setResponseLevels($responseLevels)
    {
        $this->responseLevels = $responseLevels;

        return $this;
    }

    /**
     * Get responseLevels
     *
     * @return string
     */
    public function getResponseLevels()
    {
        return $this->responseLevels;
    }

    /**
     * Set startValue
     *
     * @param integer $startValue
     *
     * @return ResponseLevels
     */
    public function setStartValue($startValue)
    {
        $this->startValue = $startValue;

        return $this;
    }

    /**
     * Get startValue
     *
     * @return int
     */
    public function getStartValue()
    {
        return $this->startValue;
    }

    /**
     * Set endValue
     *
     * @param integer $endValue
     *
     * @return ResponseLevels
     */
    public function setEndValue($endValue)
    {
        $this->endValue = $endValue;

        return $this;
    }

    /**
     * Get endValue
     *
     * @return int
     */
    public function getEndValue()
    {
        return $this->endValue;
    }
}

