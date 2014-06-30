<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivityController extends Controller{
    
    
    public function detalleActividadAction($id) {
        
        $em = $this->getDoctrine()->getEntityManager();
 
        $actividad = $em->getRepository('ItoModelBundle:Activity')->find($id);
     
        
        $parametros =  array();
        $parametros['activity'] = $actividad;
        

        return $this->render('FrontFrontendBundle:Activity:detalle_actividad.html.twig',$parametros );

    }
}
?>
