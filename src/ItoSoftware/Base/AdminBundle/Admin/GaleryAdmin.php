<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class GaleryAdmin extends Admin
{

    public function configureFormFields(FormMapper $form) {
        $form
                ->add('activity', 'sonata_type_model', array('multiple'=>true))
                ->add('active', 'checkbox', array('label'=>'Activo'))
                ->add('name', null, array('label'=>'Nombre'))
                ->add('file', 'file', array(
                    'required'=>  $this->getSubject()->getId()? false:true, 'data_class'=> null,
                ))
            ;
    }   
    
    
    public function configureListFields(ListMapper $list) 
    {
        $list
                ->addIdentifier('activity')
                ->add('name', null, array('label'=>'Nombre'))
                ->add('active', null, array('label'=>'Activo'))
                ->add('file', null, array('label' => 'Foto', 'template'=>'ItoAdminBundle:Galery:list_picture.html.twig'))
                ->add('_action', 'actions',array(
                    'label'=>'Accion',
                    'actions'=>array(
                        'edit'=>array()
                    )
                ));
    }
    
    
    public function configureDatagridFilters(DatagridMapper $filter) {
        $filter
                ->add('activity', null, array('label'=>'Actividad'))
                ->add('name', null, array('label'=> 'Nombre'))
                ->add('active', null , array('label'=>'Activo'));
    }
    
    
    public function prePersist($object) {
        $this->saveFile($object);
        parent::prePersist($object);
    }
    
    
    public function preUpdate($object) {
        
        if($object->getFile())
        {    
            $this->saveFile($object);               
        }
        else
        {
            $DM =  $this->getConfigurationPool()->getContainer()->get('Doctrine')->getManager();
            $uow = $DM->getUnitOfWork();
            
            $OriginalEntityData = $uow->getOriginalEntityData($object);
            $object->setFile($OriginalEntityData['file']);
        }
        
        parent::preUpdate($object);
    }
    
    
    public function saveFile($object){
        $object->uploadFile($object->getFile());
    }
    
    
    public function getExportFormats() {
        return array();
    }
}
?>
