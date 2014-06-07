<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

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
     * @var boolean
     */
    private $active;

  
    
    private $activity;
    
    
    private $user;

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
     * @param boolean $active
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
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * 
     * @return type
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * 
     * @return type
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * 
     * @param type $activity
     */
    public function setActivity($activity) {
        $this->activity = $activity;
    }

    /**
     * 
     * @param type $user
     */
    public function setUser($user) {
        $this->user = $user;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activity
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Activity $activity
     * @return Plan
     */
    public function addActivity(\ItoSoftware\Components\ModelBundle\Entity\Activity $activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * Remove activity
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Activity $activity
     */
    public function removeActivity(\ItoSoftware\Components\ModelBundle\Entity\Activity $activity)
    {
        $this->activity->removeElement($activity);
    }
}
