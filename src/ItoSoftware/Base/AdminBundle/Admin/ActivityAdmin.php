<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;


class ActivityAdmin extends Admin
{
    
    public function configureRoutes(RouteCollection $collection) {
        $collection->add('places');
        parent::configureRoutes($collection);
    }

     
    /**
     * 
     * @param \Sonata\AdminBundle\Form\FormMapper $form
     */
    protected function configureFormFields(FormMapper $form) {
       
        $form
           ->add('name', null , array('label'=>'Nombre'))
           ->add('description', null , array('label'=>'Descripción'))
           ->add('active', 'checkbox', array('label'=>'Activo'))
           ->add('date', 'datetime', array( 'input'  => 'datetime', 'widget' => 'choice', 'label'=>'fecha'));       
    }
    

    /**
     * 
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $list
     */
    protected function configureListFields(ListMapper $list) {
        
        $list
                ->addIdentifier('name', null, array('label'=>'Nombre'))
                ->add('active', null , array('label'=>'estado'))
                ->add('registred_date', 'datetime' , array('input'  => 'datetime', 'widget' => 'choice','label'=>'Fecha de registro'))
                ->add('_action', 'actions', array(
                    'label'=>'Acciones',
                    'actions'=>array(
                        'imagenes' => array('template' => 'ItoAdminBundle:Activity:list_actions.html.twig'),
                        'edit'=>array(),
                        'show'=>array(),
                    )
                ));
  
    }
    
    
    protected function configureShowFields(ShowMapper $show) {
      $show
           ->add('name')
           ->add('description')
           ->add('registred_date','datetime', array( 'input'  => 'datetime', 'widget' => 'choice'))
           ->add('active', null, array('type'=> 'Checkbox'))
           ->add('date', 'datetime', array( 'input'  => 'datetime', 'widget' => 'choice'));    
    }
    
    
      public function getExportFormats() {
        return array();
    }
    
 
}

?>
