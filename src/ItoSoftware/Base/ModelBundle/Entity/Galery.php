<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galery
 */
class Galery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="galery")
     */
    protected $activity;

    
    /**
     * @ORM\OneToMany(targetEntity="Places", mappedBy="galery")
     */
    private $places;
    
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
     * Set file
     *
     * @param string $file
     * @return Galery
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Galery
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
     * Set active
     *
     * @param integer $active
     * @return Galery
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
     * Get activity
     * @return Activity
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * @param Activity $activity
     * @return Activity
     */
    public function setActivity($activity) {
        $this->activity = $activity;
    
        return $this;
    }


    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add activity
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Activity $activity
     * @return Galery
     */
    public function addActivity(\ItoSoftware\Base\ModelBundle\Entity\Activity $activity)
    {
        $this->activity[] = $activity;
    
        return $this;
    }

    /**
     * Remove activity
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Activity $activity
     */
    public function removeActivity(\ItoSoftware\Base\ModelBundle\Entity\Activity $activity)
    {
        $this->activity->removeElement($activity);
    }
    
 


    /**
     * Add places
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Places $places
     * @return Galery
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
     * Get places
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces()
    {
        return $this->places;
    }
}