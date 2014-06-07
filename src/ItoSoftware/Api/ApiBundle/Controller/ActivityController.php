<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ItoSoftware\Api\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Components\Bundle\ModelBundle\Entity\Activity;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use ItoSoftware\Api\ApiBundle\lib\ApiTool;
use Utilities\Util;

class ActivityController extends Controller
{
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
        $places_id = $this->getRequest()->get('places');
        if($places_id){
            $places = $em->getRepository('ItoModelBundle:Places')->find($places_id);
            $entities = $em->getRepository('ItoModelBundle:Activity')->findBy(array('places' => $places), array('name' => 'asc' ));
            
        }else{
            $entities = $em->getRepository('ItoModelBundle:Activity')->findAll();
        }
        
        
        
        return ApiTool::renderViewFormat($this, 'ItoApiBundle:Activity:index', array('entities' => $entities));
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
        $entity = $em->getRepository('ItoModelBundle:Activity')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Actividades  no encontradas.');
        }
        return ApiTool::renderViewFormat($this, 'ItoApiBundle:Activity:show', array('entity' => $entity));
    }
}
?>
