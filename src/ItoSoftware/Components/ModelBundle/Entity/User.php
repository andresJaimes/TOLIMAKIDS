<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User extends BaseUser{
    
    
//    ******************************************************************************************
//    ****ADICIONES
//    ******************************************************************************************
    
    static $UPLOAD_DIR = "uploads/user";
    
    
    /**
     * @var string
     * 
     */
    protected $file_picture;

    
    public function uploadPicture($basepath) {
        if (null === $this->file_picture) {
            return;
        }
        if (null === $basepath) {
            return;
        }
        $nombre_archivo = $this->obtenerNuevoNombreArchivo($this->file_picture->getClientOriginalName());
        $this->file_picture->move($this->getUploadRootDir($basepath), $nombre_archivo);
        $this->setPicture($nombre_archivo);
        $this->file_picture = null;
    }

    public function obtenerNuevoNombreArchivo($nombre_original) {
        $nombre_archivo_array = explode('.', $nombre_original);
        $extension_archivo = $nombre_archivo_array[count($nombre_archivo_array) - 1];
        $nombre_picture = rand(1, 9999) . '_picture_' . date('YmsHis') . '.' . $extension_archivo;
        return $nombre_picture;
    }

    protected function getUploadRootDir($basepath) {
        // the absolute directory path where uploaded documents should be saved
        return $basepath . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return self::$UPLOAD_DIR;
    }

    public function getAbsolutePathPicture() {
        return null === $this->picture ? null : $this->getUploadRootDir() . '/' . $this->picture;
    }

    public function getWebPathPicture() {
        return null === $this->picture ? null : 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->getUploadDir() . '/' . $this->picture;
    }
    
    
    
    public function getFilePicture(){
        return $this->file_picture;
    }
    
    public function setFilePicture( $file_picture){
        return $this->file_picture = $file_picture;
    }

    
//    ******************************************************************************************
//    ****MODIFICACIONES
//    ******************************************************************************************
    
    
    
    /**
     * @var integer
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;
    
    
//    ******************************************************************************************
//    ****FIN MODIFICACIONES
//    ******************************************************************************************
    
    
    
    
    /**
     * @var string
     */
    private $picture;

    /**
     * @var collection plan
     */
    private $plan;
    
    
    private $facebookid;
    
    
    protected $facebookaccesstoken;

    
    
    public function setFacebookid($facebookid) {
        $this->facebookid = $facebookid;
    }

    public function setFacebookaccesstoken($facebookaccesstoken) {
        $this->facebookaccesstoken = $facebookaccesstoken;
    }

    
    public function getFacebookid() {
        return $this->facebookid;
    }

    public function getFacebookaccesstoken() {
        return $this->facebookaccesstoken;
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
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }


    /**
     * Set picture
     *
     * @param string $picture
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * 
     * @return $plan
     */
    public function getPlan() {
        return $this->plan;
    }

    
    /**
     * 
     * @param \ItoSoftware\Base\ModelBundle\Entity\$plan
     * @return \ItoSoftware\Base\ModelBundle\Entity\User
     */
    public function setPlan(collection $plan) {
        $this->plan = $plan;
        
        return $this;
    }


    

}