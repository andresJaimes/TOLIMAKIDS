<?php

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ItoSoftware\Front\FrontendBundle\Filter\FilterActivityPlaces;
use Symfony\Component\HttpFoundation\Request;
use ItoSoftware\Components\ModelBundle\Entity\Places;

class DefaultController extends Controller {

    public function indexAction() {

        $form = $this->get('form.factory')->create(new FilterActivityPlaces());

        $paginator = $this->get('knp_paginator');
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


            $paginator = $this->get('knp_paginator');
            $actividades = $paginator->paginate(
                    $filterBuilder, $this->get('request')->query->get('page', 1), 5
            );
        }
        return $this->render('FrontFrontendBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),
                    'actividades' => $actividades,
        ));
    }

}
