<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ItoSoftware\Api\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Components\Bundle\ModelBundle\Entity\Municipality;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use ItoSoftware\Api\ApiBundle\lib\ApiTool;
use Utilities\Util;

class MunicipalityController extends Controller{
    
    /**
     * @ApiDoc(
     * description="OBTIENE LISTADO DE TODOS LOS MUNICIPIOS",
     * filters = {
     *      { "name" = "departamento_id", "dataType" = "integer"}
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
        $entities = $em->getRepository('ItoModelBundle:Municipality')->findAll();
 
        return ApiTool::renderViewFormat($this, 'ItoApiBundle:Municipality:index', array('entities' => $entities));
    }

    /**
     * @ApiDoc(
     * description="OBTIENE UN DEPARTAMENTO",
     * statusCodes={
     *       200 = "OK",
     *       404 = "NO ENCONTRADO"
     *       }
     * )
     * */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ItoModelBundle:Municipality')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Municipio no encontrado.');
        }
        return ApiTool::renderViewFormat($this, 'ItoApiBundle:Municipality:show', array('entity' => $entity));
    }
}
?>
