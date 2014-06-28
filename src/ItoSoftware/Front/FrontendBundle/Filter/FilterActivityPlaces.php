<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ItoSoftware\Front\FrontendBundle\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\Query\Expr\Join;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;

class FilterActivityPlaces extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'filter_text', array('label'=>false));
        //$builder->add('lugar', 'filter_text');
        
        
        $builder->add('places', 'filter_text', array('label' => false,
           'apply_filter' => function (QueryInterface $filterQuery, $field, $values) {
       if (!empty($values['value'])) {
           $qb = $filterQuery->getQueryBuilder();
          // $qb->innerJoin('a.places', 'p', Join::WITH, "p.name = LOWER('".$values['value']."')");
           $qb->andWhere("p.name = LOWER('".$values['value']."')");
       }
   }));
    }
    
    
    public function getName() {
        
         return 'my_filter';
    }   
    
    
     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection'   => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
?>
