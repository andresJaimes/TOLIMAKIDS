<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


use Base\ModelBundle\Entity\Activity;

class ActivityAdmin extends Admin
{

     
    /**
     * 
     * @param \Sonata\AdminBundle\Form\FormMapper $form
     */
    protected function configureFormFields(FormMapper $form) {
       
        $form
           ->add('name')
           ->add('description')
           ->add('registred_date','datetime', array( 'input'  => 'datetime', 'widget' => 'choice'))
           ->add('active', null, array('type'=> 'Checkbox'))
           ->add('date', 'datetime', array( 'input'  => 'datetime', 'widget' => 'choice'))
           ->add('places_id', array($choices => array()))
           ->add('plan_id');       
    }
    
    /**
     * 
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $filter
     */
    protected function configureDatagridFilters(DatagridMapper $filter) {
        
        $filter
                ->add('id')
                ->add('name')
                ->add('date',  date, array( 'input'  => 'datetime', 'widget' => 'choice'));
    }
    
    
    /**
     * 
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $list
     */
    protected function configureListFields(ListMapper $list) {
        
        $list
                ->addIdentifier('id')
                ->addIdentifier('name')
                ->add('registred_date', null , array('type'=> date('dd/mm/yyyy')))
                ->add('places_id')
                ->add('plan_id');
    }
    
    
}

?>
