<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActivityController extends Controller{
    
    
    public function detalleActividadAction($id, Request $request) {
 
        $em = $this->getDoctrine()->getEntityManager();
 
        $actividad = $em->getRepository('ItoModelBundle:Activity')->find($id);
 echo $_POST["latitud"]; 
 exit;
        $parametros =  array();
        $parametros['activity'] = $actividad;
       
     

        return $this->render('FrontFrontendBundle:Activity:detalle_actividad.html.twig',$parametros);

        
    }
   
    

    

}
?>
