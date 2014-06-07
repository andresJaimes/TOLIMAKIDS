<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use ItoSoftware\Components\ToolBundle\Model\ApplicationBoot;

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
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     * @Assert\File(
     *      maxSize = "2048k",
     *      mimeTypes = {   "image/jpeg"
     *                      ,"image/pjpeg"
     *                      ,"image/png"
     *                      ,"image/svg+xml"
     *                  }
     * )
     */
    private $file;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var activity
     */
    private $activity;

    
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
     * @param boolean $active
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
     * @return boolean 
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
        return null === $this->file ? null : 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->getUploadDir() . '/' . $this->getFile();
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
            $this->setFile($nombre_archivo_logo);
        }
    }


    
    /**rha
     * Constructor
     */
    public function __construct()
    {
    $this->activity = array();
    
    }
    
    /**
     * Add activity
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Activity $activity
     * @return Galery
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

    
       public function __toString() {
        return $this->getName() ? $this->getName() : 'Nueva Galeria';
    }  
}
