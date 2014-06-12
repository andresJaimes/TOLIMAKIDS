<?php

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ItoSoftware\Front\FrontendBundle\Filter\FilterActivityPlaces;


class DefaultController extends Controller
{
 
    public function indexAction()
    {
        $form = $this->get('form.factory')->create(new FilterActivityPlaces());
$actividades = array();
        if ($this->get('request')->query->has($form->getName())) {
            // manually bind values from the request
            $form->submit($this->get('request')->query->get($form->getName()));

            // initialize a query builder
            $filterBuilder = $this->get('doctrine.orm.entity_manager')
                ->getRepository('ItoModelBundle:Activity')
                ->createQueryBuilder('a');
            

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            // now look at the DQL =)
            echo $filterBuilder->getDql();
            $actividades = $filterBuilder->getQuery()->getResult();
        }

        return $this->render('FrontFrontendBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'activities' => $actividades
        ));
            
        
    }

    
}
