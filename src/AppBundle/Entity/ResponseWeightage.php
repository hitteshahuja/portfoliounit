<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * response_weightage
 *
 * @ORM\Table(name="ResponseWeightage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\response_weightageRepository")
 */
class ResponseWeightage
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
     * @ORM\Column(name="response_level_id", type="integer")
     */
    private $responseLevelId;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;


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
     * Set responseLevelId
     *
     * @param integer $responseLevelId
     *
     * @return response_weightage
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
     * Set weight
     *
     * @param integer $weight
     *
     * @return response_weightage
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

