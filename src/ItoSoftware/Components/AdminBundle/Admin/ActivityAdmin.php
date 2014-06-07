<?php

namespace ItoSoftware\Components\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;


class ActivityAdmin extends Admin
{
    
    
  public function getNewInstance()
  {
    $activity = parent::getNewInstance();
    // provide a default date/time of now.
    $activity->setRegistredDate( new \DateTime( 'now' ) );
    
    return $activity;
  }
    
    
    public function configureRoutes(RouteCollection $collection) {
        $collection->add('galery');
        parent::configureRoutes($collection);
    }
    
     
    /**
     * 
     * @param \Sonata\AdminBundle\Form\FormMapper $form
     */
    protected function configureFormFields(FormMapper $form) {
      $form
           ->add('name', null , array('label'=>'Nombre'))
           ->add('description', 'textarea' , array('label'=>'Descripción'))
           ->add('active', null, array('label'=>'Activo'))
           ->add('registred_date', 'datetime', array('label'=>'fecha de registro')) 
            ->add('cost', null, array('label'=>'Valor'));
    }
    

    /**
     * 
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $list
     */
    protected function configureListFields(ListMapper $list) {
        
        $list
                ->addIdentifier('name', null, array('label'=>'Nombre'))
                ->add('active', null , array('label'=>'estado'))
                ->add('cost', null, array('label'=>'Valor'))
                ->add('registred_date', 'datetime' , array('input'  => 'datetime', 'widget' => 'choice','label'=>'Fecha de registro'))
                ->add('_action', 'actions', array(
                    'label'=>'Acciones',
                    'actions'=>array(
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
           ->add('active', null, array('label'=> 'activo'))
            ->add('cost', null, array('label'=>'Valor'));
    }
    
    
      public function getExportFormats() {
        return array();
    }
    
      public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
                 ->add('name', 'doctrine_orm_callback', array(
                    'callback'=>array($this, 'getNameFilter'),'label'=>'Nombre'
                ));
    }
    
    
    public function getNameFilter($queryBuilder, $alias, $field, $value){
        
        if(!$value)
            return;
        
        if($value['value']&& $value['value']!=''){
            $queryBuilder->andWhere("lower($alias.name) LIKE :value");
            $queryBuilder->setParameter('value', '%'. strtolower($value['value'].'%'));            
        }
        
        return true;
    }
    
    
 
}

?>
