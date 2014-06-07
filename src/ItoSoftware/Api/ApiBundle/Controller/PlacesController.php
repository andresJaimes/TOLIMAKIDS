<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ItoSoftware\Api\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Components\Bundle\ModelBundle\Entity\Places;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use ItoSoftware\Api\ApiBundle\lib\ApiTool;
use Utilities\Util;
use Symfony\Component\HttpFoundation\JsonResponse;

class PlacesController extends Controller{
    
    /**
     * @ApiDoc(
     * description="OBTIENE LISTADO DE TODOS LOS LUGARES",
     * filters = {
     *      { "name" = "municipality_id", "dataType" = "integer"}
     * },
     * statusCodes = {
     *          200 = "OK",
     *          404 = "NO ENCONTRADO"
     *          }    
     * )
     * */
    public function indexAction() {
        $entities = null;
        $em = $this->getDoctrine()->getManager();
        $municipality_id = $this->getRequest()->get('municipality_id');
        $json=array();
        if($municipality_id){
            $municipality = $em->getRepository('ItoModelBundle:Municipality')->find($municipality_id);
            $entities = $em->getRepository('ItoModelBundle:Places')->findBy(array('municipality' => $municipality), array('name' => 'asc' ));
       
            
        }
    
        else{
            $entities = $em->getRepository('ItoModelBundle:Places')->findAll();
        }
        
        
    foreach($entities as $place){
        $actividades=array();
        foreach ($place->getActivity() as $actividad){
            $actividades[]=array('name'=>$actividad->getName(), 'cost'=>$actividad->getCost());
        }
         $json[]=array('id'=>$place->getId(),'activity'=>$actividades, 'name'=>$place->getName(), 'description'=>$place->getDescription(), 'latitude'=>$place->getLatitude(), 'length'=>$place->getLength(), 'address'=>$place->getAddress());
    }
        
        return new JsonResponse(array('Places'=>$json));
    }
    

    /**
     * @ApiDoc(
     * description="OBTIENE UN Lugar,
     * statusCodes={
     *       200 = "OK",
     *       404 = "NO ENCONTRADO"
     *       }
     * )
     * */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ItoModelBundle:Places')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Lugares no encontrado.');
        }
        
         foreach($entity as $place){
        $actividades=array();
        foreach ($place->getActivity() as $actividad){
            $actividades[]=array('name'=>$actividad->getName(), 'cost'=>$actividad->getCost());
        }
        $json[]=array('id'=>$place->getId(),'activity'=>$actividades, 'name'=>$place->getName(), 'description'=>$place->getDescription(), 'latitude'=>$place->getLatitude(), 'length'=>$place->getLength(), 'address'=>$place->getAddress());
    }
        
        return new JsonResponse(array('places'=>$json));
        
    }
    
    
}


?>
