<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 */
class Activity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $registredDate;

    /**
     * @var boolean
     */
    private $active;


    /**
     *
     * @var float 
     */
    private $cost;
    
    /**
     *
     * @var type 
     */
    private $places;

    /**
     *
     * @var type 
     */
    private $plan;
   
    /**
     *
     * @var type 
     */
    private $galery;

    
    
    
    
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
     * Set name
     *
     * @param string $name
     * @return Activity
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Activity
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set registredDate
     *
     * @param \DateTime $registredDate
     * @return Activity
     */
    public function setRegistredDate($registredDate)
    {
        $this->registredDate = $registredDate;
    
        return $this;
    }

    /**
     * Get registredDate
     *
     * @return \DateTime 
     */
    public function getRegistredDate()
    {
        return $this->registredDate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Activity
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
     * Get Places
     * @return Places
     */
    public function getPlaces() {
        return $this->places;
    }

    
    /**
     * 
     * @param Places $places
     * @return Places
     */
    public function setPlaces($places) {
        $this->places = $places;
        
        return $this;
    }

    /**
     * Get plan
     * @return Plan
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * @param Plan $plan
     * @return Plan
     */
    public function setPlan($plan) {
        $this->plan = $plan;
        
        return $this;
    }
   
    
    /**
     * 
     * @param $galery
     */
    public function setGalery($galery) {
        $this->galery = $galery;
        
        return $this;
    }

    
    /**
     * Get Galery
     * @return galery
     */
    public function getGalery() {
        return $this->galery;
    }

            
    
    /**
     * Constructor
     */
    public function __construct()
    {
    $this->places = new \Doctrine\Common\Collections\ArrayCollection();
    $this->plan = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add places
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Places $places
     * @return Activity
     */
    public function addPlace(\ItoSoftware\Components\ModelBundle\Entity\Places $places)
    {
        $this->places[] = $places;
    
        return $this;
    }

    /**
     * Remove places
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Places $places
     */
    public function removePlace(\ItoSoftware\Components\ModelBundle\Entity\Places $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Add plan
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Plan $plan
     * @return Activity
     */
    public function addPlan(\ItoSoftware\Components\ModelBundle\Entity\Plan $plan)
    {
        $this->plan[] = $plan;
    
        return $this;
    }

    /**
     * Remove plan
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Plan $plan
     */
    public function removePlan(\ItoSoftware\Components\ModelBundle\Entity\Plan $plan)
    {
        $this->plan->removeElement($plan);
    }
    
    
    public function setCost($cost) {
        $this->cost = $cost;
    }

    public function getCost() {
        return $this->cost;
    }

   public function __toString() {
        return $this->getName() ? $this->getName() : 'Nueva actividad';
    }  

    
    
}