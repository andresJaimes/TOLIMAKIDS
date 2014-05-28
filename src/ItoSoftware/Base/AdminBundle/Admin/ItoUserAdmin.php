<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use FOS\UserBundle\Model\UserManagerInterface;
use Sonata\AdminBundle\Validator\ErrorElement;

class ItoUserAdmin extends Admin {
    protected $translationDomain = 'ItoAdminBundle'; // default is 'messages'
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
        $this->baseRoutePattern = 'user';
        $this->persistFilters = true;
    }

    protected function configureRoutes(RouteCollection $collection) {
        parent::configureRoutes($collection);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('email')
                ->add('file_picture', null, array('label' => 'Picture', 'template' => 'ItoAdminBundle:ItoUser:picture.html.twig'))
                ->add('identificacion', null, array('label' => 'Identification'))
                ->add('enabled', null, array('editable' => true))
                ->add('createdAt')
                ->add('_action', 'actions', array(
                    'label' => 'accion',
                    'actions' => array(
                        'edit' => array(),
                        'delete' => array('template' => 'ItoAdminBundle:ItoUser:list_action_delete.html.twig'),
                        )))
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $filterMapper) {
        $filterMapper
                ->add('email')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('General')
                ->add('email', null, array('required' => true))
                ->add('plainPassword', 'text', array('label' => 'Password', 'required' => false))
                ->end()
                ->with('Profile')
                ->add('firstname', null, array('required' => false))
                ->add('lastname', null, array('required' => false))
                ->add('phone', null, array('required' => false))
                ->add('file_picture', 'file', array(
                    'data_class' => null,
                    'label' => 'Picture',
                    'required' => false
                ))
                ->end()
                ->with('Management')
                ->add('roles', 'sonata_security_roles', array(
                    'expanded' => true,
                    'multiple' => true,
                    'required' => true,
                ))
                ->add('enabled', null, array('required' => false))
                ->end();
    }

    /**
     * @param UserManagerInterface $userManager
     */
    public function setUserManager(UserManagerInterface $userManager) {
        $this->userManager = $userManager;
    }

    /**
     * @return UserManagerInterface
     */
    public function getUserManager() {
        return $this->userManager;
    }

    /**
     * {@inheritdoc}
     */
    public function create($user) {
        $container = $this->getConfigurationPool()->getContainer();
        $is_super_admin = false;
        foreach ($user->getRoles() as $rol) {
            if ($rol == 'ROLE_SUPER_ADMIN') {
                $is_super_admin = true;
            }
        }
        try {
            $message = \Swift_Message::newInstance()
                    ->setSubject($container->getParameter('project_name') . ' - Nueva Cuenta')
                    ->setFrom($container->getParameter('mailer_user'))
                    ->setTo($user->getEmail())
                    ->setContentType("text/html")
                    ->setBody($container->get('templating')->render('ItoAdminBundle:Email:new_user.html.twig', array('user' => $user, 'is_super_admin' => $is_super_admin)))
            ;
            $container->get('mailer')->send($message);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $this->prePersist($user);
        $this->getModelManager()->create($user);
        $this->postPersist($user);
        $this->createObjectSecurity($user);
        $this->update($user);
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($user) {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
        $user->setUsername($user->getEmail());
        $this->saveFile($user);
    }

    public function prePersist($user) {
        $user->setUsername($user->getEmail());
        $this->saveFile($user);
    }

    public function titleList() {
        return 'User Administration';
    }

    public function saveFile($user) {
        $basepath = $this->getRequest()->getBasePath();
        $user->uploadPicture($basepath);
    }

    public function validate(ErrorElement $errorElement, $user) {
        $is_new = false;
        if (is_null($user->getId())) {
            $is_new = true;
        }
        $container = $this->getConfigurationPool()->getContainer();
        $em = $container->get('doctrine')->getEntityManager();
        $user_with_same_email = $em->getRepository('ItoModelBundle:User')->findOneByEmail($user->getEmail());
        if ($is_new) {
            if (!$user->getPlainPassword()) {
                $errorElement
                        ->with('plainPassword')
                        ->addViolation('Password is mandatory')
                        ->end();
            }
            if ($user_with_same_email) {
                $errorElement
                        ->with('email')
                        ->addViolation('There is an existing user with this email')
                        ->end();
            }
        }
        else{
            if ($user_with_same_email && $user!=$user_with_same_email) {
                $errorElement
                        ->with('email')
                        ->addViolation('There is an existing user with this email')
                        ->end();
            }
        }
        parent::validate($errorElement, $user);
    }

}
