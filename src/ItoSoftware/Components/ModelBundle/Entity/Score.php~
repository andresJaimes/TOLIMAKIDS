<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 */
class Score
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="score")
     * 
     */
    protected $activity;

    
    public function _construct(){
        $this->activity = new ArrayCollection();
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
     * Set number
     *
     * @param integer $number
     * @return Score
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Score
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
     * Set date
     *
     * @param \DateTime $date
     * @return Score
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
     * Get activity
     * @return Activity
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * @param type $activity
     * @return Activity
     */
    public function setActivity($activity) {
        $this->activity = $activity;
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
     * @param \ItoSoftware\Base\ModelBundle\Entity\Activity $activity
     * @return Score
     */
    public function addActivity(\ItoSoftware\Components\ModelBundle\Entity\Activity $activity)
    {
        $this->activity[] = $activity;
    
        return $this;
    }

    /**
     * Remove activity
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Activity $activity
     */
    public function removeActivity(\ItoSoftware\Components\ModelBundle\Entity\Activity $activity)
    {
        $this->activity->removeElement($activity);
    }
}
