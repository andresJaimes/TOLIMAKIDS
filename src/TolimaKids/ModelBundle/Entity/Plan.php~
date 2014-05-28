<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 */
class Plan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tittle;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $registrarionDate;

    /**
     * @var integer
     */
    private $active;

     /**
     * @ORM\ManyToOne(targetEntity="Activity", inversedBy="plan")
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     */
    protected $activity;

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
     * Set tittle
     *
     * @param string $tittle
     * @return Plan
     */
    public function setTittle($tittle)
    {
        $this->tittle = $tittle;
    
        return $this;
    }

    /**
     * Get tittle
     *
     * @return string 
     */
    public function getTittle()
    {
        return $this->tittle;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Plan
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set registrarionDate
     *
     * @param \DateTime $registrarionDate
     * @return Plan
     */
    public function setRegistrarionDate($registrarionDate)
    {
        $this->registrarionDate = $registrarionDate;
    
        return $this;
    }

    /**
     * Get registrarionDate
     *
     * @return \DateTime 
     */
    public function getRegistrarionDate()
    {
        return $this->registrarionDate;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Plan
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
}