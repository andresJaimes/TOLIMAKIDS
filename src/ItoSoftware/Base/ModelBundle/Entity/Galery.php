<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galery
 */
class Galery
{
     static $UPLOAD_DIR = "uploads/galery/activity";
     
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

     public function getWebPathFile() {
        return null === $this->archivo ? null : 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->getUploadDir() . '/' . $this->getArchivo();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return self::$UPLOAD_DIR;
    }

     public function uploadFile($file) {
        if (null === $file) {
            return;
        }
        if ($file instanceof UploadedFile) {
            $directorio_destino = ApplicationBoot::getContainer()->get('kernel')->getRootDir() . '/../web/' . $this->getUploadDir();
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $nombre_archivo_logo = uniqid(date('YmdHis')) . '.' . $ext;
            $image_size = 256729;
            if ($file->getSize() > $image_size) {
                if (!file_exists($file->getPathname() . '/' . $file->getClientOriginalName())) {
                    $image = imagecreatefromjpeg($file);

                    $quality = round(($image_size * 100) / $file->getSize());

                    switch ($file->getMimeType()) {
                        case "image/jpeg":
                            imagejpeg($image, $directorio_destino . '/' . $nombre_archivo_logo, $quality);
                            break;
                        case "image/png" :
                            imagepng($image, $directorio_destino . '/' . $nombre_archivo_logo, $quality);
                            break;
                        default:
                            break;
                    }
                } else {
                    $file->move($directorio_destino, $nombre_archivo_logo);
                }
            } else {
                $file->move($directorio_destino, $nombre_archivo_logo);
            }
            $this->setArchivo($nombre_archivo_logo);
        }
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

}