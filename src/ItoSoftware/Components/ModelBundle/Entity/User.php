<?php
namespace ItoSoftware\Components\ModelBundle\Entity;


/**
 * User
 */
class User extends \Sonata\UserBundle\Entity\BaseUser{

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

    public function getFilePicture() {
        return $this->file_picture;
    }

    public function setFilePicture($file_picture) {
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
    
    public function prePersist(){
        $this->username = $this->getEmail();
        $this->usernameCanonical = $this->getEmailCanonical();
        parent::prePersist();
    }

//    ******************************************************************************************
//    ****FIN MODIFICACIONES
//    ******************************************************************************************

    /**
     * @var string
     */
    private $picture;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups() {
        return $this->groups;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return User
     */
    public function setPicture($picture) {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture() {
        return $this->picture;
    }
    
    
    protected $facebookid;
    
    
    protected $facebookaccesstoken;
    
    public function getFacebookid() {
        return $this->facebookid;
    }

    public function getFacebookaccesstoken() {
        return $this->facebookaccesstoken;
    }

    public function setFacebookid($facebookid) {
        $this->facebookid = $facebookid;
    }

    public function setFacebookaccesstoken($facebookaccesstoken) {
        $this->facebookaccesstoken = $facebookaccesstoken;
    }
    
    protected $plan;
    
    public function getPlan() {
        return $this->plan;
    }

    public function setPlan($plan) {
        $this->plan = $plan;
    }



}