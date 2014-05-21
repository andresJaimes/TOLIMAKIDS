<?php

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class PlacesAdmin extends Admin
{
    
    public function configureRoutes(RouteCollection $collection) {
        $collection->add('mucipality');
        parent::configureRoutes($collection);
    }
    
    
    public function configureFormFields(FormMapper $form) 
    {
        $form
                ->add('name', null, array('label'=>'Nombre'))
                ->add('address', null, array('label'=>'Dirección'))
                ->add('description', null, array('label'=>'Descripción'))
                ->add('latitude')
                ->add('length')
                ->add('municipality', null , array( 'label'=>'Municipio', 'attr' => array('rel'=>'Municipality')))
                ->add('cost', null, array('label'=>'Costos'));
    }
    
    
    public function configureListFields(ListMapper $list) 
    {
       $list
               ->addIdentifier('name', null , array('label'=>'Nombre'))
               ->add('municipality', null , array('label'=>'Municipio'))
               ->add('_actions', 'actions', array(
                   'label'=>'label',
                   'actions'=>array(
                       'edit'=>array(),
                       'show'=>array()
                   )
               ));
    }
    
    
    public function configureDatagridFilters(DatagridMapper $filter) {
        
        $filter
                ->add('name', 'doctrine_orm_callback', array(
                    'callback'=>array(
                        $this, 'getNameFilter'
                    ),
                    
                ))
                ->add('municipality')
                ->add('address');
    }
    
    
    public function getNameFilet($queryBuildar, $alias, $field, $value)
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
                ->add('name')
                ->add('description')
                ->add('municipality')
                ->add('latitude')
                ->add('length')
                ->add('Map', null, array('template'=>'ItoAdminBundle:Places:show_map.html.twig'));
    }
    
    
    public function getExportFormats() {
       return array();
    }
    
}

?>
