<?php

namespace ItoSoftware\Components\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PlacesAdmin extends Admin
{
    
    
    
    
    
    public function configureFormFields(FormMapper $form) 
    {
        $form
                ->add('name', null, array('label'=>'Nombre'))
                ->add('address', null, array('label'=>'Dirección'))
                ->add('description', 'textarea', array('label'=>'Descripción'))
                ->add('latitude', null, array('attr'=>array('rel'=>'latitude')))
                ->add('length', null, array('attr'=>array('rel'=> 'length')))
                ->add('municipality', null , array('attr' => array('rel'=>'Municipality'), 'label'=>'Municipio'));
    }
    
    
    public function configureListFields(ListMapper $list) 
    {
       $list
               ->addIdentifier('name', null , array('label'=>'Nombre'))
               ->add('cost', null, array('label'=>'Valor'))
               ->add('municipality', null , array('label'=>'Municipio'))
               ->add('_action', 'actions', array(
                   'label'=>'Accion',
                   'actions'=>array(
                       'edit'=>array(),
                       'show'=>array()
                   )
               ));
    }
    
    
    public function configureDatagridFilters(DatagridMapper $filter) {
        
        $filter
                ->add('name', 'doctrine_orm_callback', array(
                    'callback'=>array($this, 'getNameFilter'),'label'=>'Nombre'
                    
                ))
                ->add('municipality', null,array('label'=>'Municipio'));
    }
    
    
    public function getNameFilter($queryBuildar, $alias, $field, $value)
    {
     if(!$value)
         return;
     if($value['value']&&$value['value']!=''){
         $queryBuildar->andWhere("lower($alias.name)LIKE:value");
         $queryBuildar->setParameter('value','%'. strtolower($value['value'].'%'));
     }
    }
    
    
    public function configureShowFields(ShowMapper $show) {
        $show
                ->add('name', null , array('label'=>'Nombre'))
                ->add('description', null,array('label'=>'Descripción'))
                ->add('municipality', null , array('label'=>'Municipio'))
                ->add('latitude', null , array('label'=>'Latitud'))
                ->add('length', null , array('label'=>'Longitud'))
                ->add('Mapa', null, array('template'=>'ItoAdminBundle:Places:show_map.html.twig'));
    }
    
    
    public function getExportFormats() {
       return array();
    }
    
}

?>
