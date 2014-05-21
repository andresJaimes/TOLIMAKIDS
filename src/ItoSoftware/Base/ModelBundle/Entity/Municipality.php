<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

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


    
    protected $pĺaces;
    
    
    
    
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
    

    
      public function addplaces(\WebApp\ModeloBundle\Entity\Places $places) {
        $this->plcaes[] = $places;

        return $this;
    }

    /**
     * Remove lugar_municipios
     *
     * @param \WebApp\ModeloBundle\Entity\Lugar $lugarMunicipios
     */
    public function removePlaces(\WebApp\ModeloBundle\Entity\Place $places) {
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
}