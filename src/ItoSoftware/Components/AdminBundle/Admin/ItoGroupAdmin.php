<?php

namespace ItoSoftware\Components\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use FOS\UserBundle\Model\UserManagerInterface;

class ItoGroupAdmin extends Admin
{
    private $container;
    private $user_session;

    public function setContainer($container = null) {
        $this->container = $container;
        $token = $this->container->get('security.context')->getToken();
        if ($token) {
            $this->user_session = $token->getUser();
        }
    }

    public function configure() {
        parent::configure();
        $this->baseRoutePattern = 'user-group';
        $this->persistFilters = true;
    }

    protected function configureRoutes(RouteCollection $collection) {
        $collection
                ->remove('create')
                ->remove('list')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewInstance() {
        $class = $this->getClass();

        return new $class('', array());
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('name')
                ->add('roles')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name')
                ->add('roles', 'sonata_security_roles', array(
                    'expanded' => true,
                    'multiple' => true,
                    'required' => false
                ))
        ;
    }

    public function titleList() {
        return 'Administrar Grupos';
    }

    public function getExportFormats() {
        array();
    }

    public function getBatchActions() {
        $actions = array();


        return $actions;
    }
}
