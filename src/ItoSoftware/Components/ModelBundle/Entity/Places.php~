<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Places
 */
class Places
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
    private $address;

    /**
     * @var string
     */
    private $description;

    /**
     * @var double
     */
    private $latitude;

    /**
     * @var double
     */
    private $length;


    /**
     * @ORM\OneToMany(targetEntity="Municipatily", mappedBy="places")
     * 
     */
    protected $municipality;
   
    
    /**
     * @ORM\ManyToOne(targetEntity="Activity", inversedBy="places")
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     */
    protected $activity;
    
    /**
     * @ORM\ManyToOne(targetEntity="Galery", inversedBy="places")
     * @ORM\JoinColumn(name="galery_id", referencedColumnName="id")
     */
    protected $galery;
    
    
    public function _construct(){
        $this->municipality = new ArrayCollection();
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
     * @param double $latitude
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
     * @return double 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set length
     *
     * @param double $length
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
     * @return double 
     */
    public function getLength()
    {
        return $this->length;
    }
    
    /**
     * Get municipality_id
     * @return type
     */
    public function getMunicipality() {
        return $this->municipality;
    }

    /**
     * @param type $municipality
     * @return Municipality
     */
    public function setMunicipality($municipality) {
        $this->municipality = $municipality;
    
        return $this;
    }



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->municipality = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add municipality
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Municipality $municipality
     * @return Places
     */
    public function addMunicipality(\ItoSoftware\Base\ModelBundle\Entity\Municipality $municipality)
    {
        $this->municipality[] = $municipality;
    
        return $this;
    }

    /**
     * Remove municipality
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Municipality $municipality
     */
    public function removeMunicipality(\ItoSoftware\Base\ModelBundle\Entity\Municipality $municipality)
    {
        $this->municipality->removeElement($municipality);
    }
}