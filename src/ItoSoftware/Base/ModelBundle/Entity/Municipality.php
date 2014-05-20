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

   /**
     * @var double
     */
    private $latitude;

    /**
     * @var double
     */
    private $length;

    /**
     * @ORM\ManyToOne(targetEntity="Places", inversedBy="municipality")
     * @ORM\JoinColumn(name="places_id", referencedColumnName="id")
     */
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
    
    /**
     * @param double $latitude
     * @return double
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    /**
     * @param double $length
     * @return double
     */
    public function setLength($length) {
        $this->length = $length;
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
     * Get length
     *
     * @return float 
     */
    public function getLength()
    {
        return $this->length;
    }
}