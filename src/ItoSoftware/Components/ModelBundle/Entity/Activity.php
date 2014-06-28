<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 */
class Activity
{
    
    //-------------------------------------------------
    //  MODIFICACIÓN
    //----------------------------------------------------
      
    public function getFoto(){
        
         foreach ($this->getGalery() as $galery) {
            if ($galery->getActive()) {
                return $galery;
            }
        }
        return null;
    }
    
         public function getGaleryLength(){
           return count($this->getGalery());
       }
    
       public function __toString() {
           return $this->getName();
       }

    //--------------------------------------------------
    //
    //--------------------------------------------------
  
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
     * @var float
     */
    private $cost;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $galery;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plan;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $places;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->galery = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plan = new \Doctrine\Common\Collections\ArrayCollection();
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cost
     *
     * @param float $cost
     * @return Activity
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }

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
     * Add galery
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Galery $galery
     * @return Activity
     */
    public function addGalery(\ItoSoftware\Components\ModelBundle\Entity\Galery $galery)
    {
        $this->galery[] = $galery;

        return $this;
    }

    /**
     * Remove galery
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Galery $galery
     */
    public function removeGalery(\ItoSoftware\Components\ModelBundle\Entity\Galery $galery)
    {
        $this->galery->removeElement($galery);
    }

    /**
     * Get galery
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGalery()
    {
        return $this->galery;
    }

    /**
     * Add plan
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Plan $plan
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
     * @param \ItoSoftware\Components\ModelBundle\Entity\Plan $plan
     */
    public function removePlan(\ItoSoftware\Components\ModelBundle\Entity\Plan $plan)
    {
        $this->plan->removeElement($plan);
    }

    /**
     * Get plan
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Add places
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Places $places
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
     * @param \ItoSoftware\Components\ModelBundle\Entity\Places $places
     */
    public function removePlace(\ItoSoftware\Components\ModelBundle\Entity\Places $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Get places
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces()
    {
        return $this->places;
    }
    
    
    /**
     * @var float
     */
    private $costa;


    /**
     * Set costa
     *
     * @param float $costa
     * @return Activity
     */
    public function setCosta($costa)
    {
        $this->costa = $costa;

        return $this;
    }

    /**
     * Get costa
     *
     * @return float 
     */
    public function getCosta()
    {
        return $this->costa;
    }
}
