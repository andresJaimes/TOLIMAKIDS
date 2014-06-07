<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipality
 */
class Municipality
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
    private $registrationDate;


    
    protected $places;
    
    
    
    
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
     * @return Municipality
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
     * @return Municipality
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
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Municipality
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
    
        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime 
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
    

    
      public function addplaces(Places $places) {
        $this->plcaes[] = $places;

        return $this;
    }

    /**
     * Remove lugar_municipios
     *
     */
    public function removePlaces(Places $places) {
        $this->places->removeElement($places);
    }

    /**
     * Get lugar_municipios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces() {
        return $this->places;
    }
    
    
      
    public function __toString() {
        return $this->getName() ? $this->getName() : 'Nuevo Municipio';
    }  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add places
     *
     * @param \ItoSoftware\Components\ModelBundle\Entity\Places $places
     * @return Municipality
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
}
