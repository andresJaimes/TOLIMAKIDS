<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

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
     * @var integer
     */
    private $active;

    
    /**
     * @var datetime 
     */
    private $date;
    
    /**
     * @ORM\OneToMany(targetEntity="Places", mappedBy="activity")
     */
    protected $places;


    /**
     * @ORM\OneToMany(targetEntity="Plan", mappedBy="activity")
     */
    protected $plan;
    

     /**
     * @ORM\ManyToOne(targetEntity="Galery", inversedBy="activity")
     * @ORM\JoinColumn(name="galery_id", referencedColumnName="id")
     */
    protected $galery;
    
     /**
     * @ORM\ManyToOne(targetEntity="Score", inversedBy="activity")
     * @ORM\JoinColumn(name="score_id", referencedColumnName="id")
     */
    protected $score;
    
    
    
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
     * @param integer $active
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
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * Get date
     * @return type
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @param datetime $date 
     * @param type $date
     */
    public function setDate($date) {
        $this->date = $date;
        
        return $this;
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
    public function addPlace(\ItoSoftware\Base\ModelBundle\Entity\Places $places)
    {
        $this->places[] = $places;
    
        return $this;
    }

    /**
     * Remove places
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Places $places
     */
    public function removePlace(\ItoSoftware\Base\ModelBundle\Entity\Places $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Add plan
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Plan $plan
     * @return Activity
     */
    public function addPlan(\ItoSoftware\Base\ModelBundle\Entity\Plan $plan)
    {
        $this->plan[] = $plan;
    
        return $this;
    }

    /**
     * Remove plan
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Plan $plan
     */
    public function removePlan(\ItoSoftware\Base\ModelBundle\Entity\Plan $plan)
    {
        $this->plan->removeElement($plan);
    }
}