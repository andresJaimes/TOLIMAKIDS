<?php


namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


use Base\ModelBundle\Entity\Score;

class SocreAdmin  extends Admin
{
 
    protected function configureFormFields(FormMapper $form) {
        parent::configureFormFields($form);
    }
}
?>
