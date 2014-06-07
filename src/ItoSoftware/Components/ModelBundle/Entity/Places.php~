<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Places
 */
class Places
{
   
 //-------------------------------------------------------------------
 //     MODIFICACIONES
 //-------------------------------------------------------------------- 
 
    public function validateActivity(ExecutionContextInterface $context) {
       if ($this->getActivity()->isEmpty()) {
           $context->addViolationAt(
                   'activity', 'Debe seleccionar alguna actividad ', array(), null
           );
       }
   }
    
 //--------------------------------------------------------------------
 //     END
 //--------------------------------------------------------------------
    
  
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $length;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ItoSoftware\Components\ModelBundle\Entity\Municipality
     */
    private $municipality;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $activity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Places
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
     * Set address
     *
     * @param string $address
     * @return Places
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Places
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
     * Set latitude
     *
     * @param float $latitude
     * @return Places
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set length
     *
     * @param float $length
     * @return Places
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return float 
     */
    public function getLength()
    {
        return $this->length;
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
     * Set municipality
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Municipality $municipality
     * @return Places
     */
    public function setMunicipality(\ItoSoftware\Components\ModelBundle\Entity\Municipality $municipality = null)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return \ItoSoftware\Components\ModelBundle\Entity\Municipality 
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }

    /**
     * Add activity
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Activity $activity
     * @return Places
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

    /**
     * Get activity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
