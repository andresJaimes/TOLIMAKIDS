<?php

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($_locale)
    {
        if(!$_locale || $_locale  == ''){
            $_locale = $this->container->getParameter('locale');
            return $this->redirect($this->generateUrl('front_frontend_homepage', array('_locale' => $_locale)));
        }
        $request = $this->getRequest();
        $request->setLocale($_locale);
        
        $translated_hello = $this->get('translator')->trans('Hello');
        return $this->render('FrontFrontendBundle:Default:index.html.twig', array('translated_hello'=>$translated_hello));
    }
    

}
