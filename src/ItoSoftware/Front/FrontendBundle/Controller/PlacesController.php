<?php
namespace ItoSoftware\Front\FrontendBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlacesController extends Controller
{
    
    public function detalleLugarAction($id) {
        
        $em = $this->getDoctrine()->getEntityManager();

        $lugar = $em->getRepository('ItoModelBundle:Places')->find($id);
 
        $parametros =  array();
        $parametros['places'] = $lugar;
   
       return $this->render('FrontFrontendBundle:Places:detalle_lugar.html.twig', $parametros);
   
    }
}
?>
