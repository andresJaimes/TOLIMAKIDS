<?php
namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MunicipalityAdmin extends Admin
{
 
    public function configureFormFields(FormMapper $form) { 
        $form
                ->add('name', null , array('label'=>'Nombre'))
                ->add('description', null , array('label'=>'Descripción'))
                ->add('registration_date', 'datetime', array('label'=>'fecha de registro'));
    }
    
    
    public function configureListFields(ListMapper $list) {
        $list
                ->addIdentifier('name', null, array('label'=>'Nombre'))
                ->add('registration_date', 'datetime', array('label'=>'Fecha de registro'))
                ->add('_action', 'actions', array(
                    'label'=>'Accion',
                    'actions'=> array(
                        'edit'=>array(),
                    )
                ))
                ;
    }
   
    

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
                ->add('name', 'doctrine_orm_callback', array(
                    'callback'=>array($this,'getNameFilter' ),
                    'label'=>'Nombre',
                    'field_type'=>'text',
                ));
    }
    
    
    public function getNameFilter($querybuilder, $alias, $field, $value){
        
        if(!$value)
            return;
        
        if($value['value']&& $value['value']!=' '){
            $querybuilder->andWhere("lower($alias.name) LIKE: value");
            $querybuilder->setParameter('value', '%'. strtolower($value['value'].'%'));            
        }
        
        return true;
    }
    
    
    public function getExportFormats() {
        return array();
    }
}
?>
