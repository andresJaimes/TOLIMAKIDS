<?php

namespace WebApp\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class GaleryAdmin extends Admin
{

    public function configureFormFields(FormMapper $form) {
        $form
                ->add('activity', 'sonata_type_model', array('btn_add'=>false))
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
                ->add('active', 'checkbox', array('label'=>'Activo'))
                ->add('file', null, array('label' => 'Foto', 'template'=>'ItoAdminBundle:Galery:list_foto.html.twig'))
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
        parent::prePersist($object);
    }
}
?>
