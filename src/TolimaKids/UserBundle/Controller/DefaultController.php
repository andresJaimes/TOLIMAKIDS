<?php

namespace ItoSoftware\Components\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ItoUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function passwordRecoveryAction()
    {
        $user = $this->getUser();
        $is_super_admin = false;
        foreach ($user->getRoles() as $rol) {
            if ($rol == 'ROLE_SUPER_ADMIN') {
                $is_super_admin = true;
            }
        }
        if($is_super_admin){
            return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
        }
        else{
            return $this->redirect($this->generateUrl('frontend_homepage'));
        }
    }
}
