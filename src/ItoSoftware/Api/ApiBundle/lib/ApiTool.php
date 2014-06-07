<?php

namespace ItoSoftware\Api\ApiBundle\lib;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiTool
 *
 * @author ceo
 */
class ApiTool {

    public static function renderViewFormat($controller, $view, $parameters, $accepted_content_types = Array('application/json')) {
        foreach ($accepted_content_types as $accepted_content_type) {
            switch ($accepted_content_type) {
                case 'text/html':

                    return $controller->render($view . '.html.twig', $parameters);
                    break;
            }
        }
        return $controller->render($view . '.json.twig', $parameters);
    }

    public static function ajustarFormatoPuntoGeo($punto, $is_longitud = false) {
        ini_set('precision', 10);


        $num = '';
        if (strpos($punto, ",") === FALSE) {
            $longitud = explode(".", $punto);
            if (count($longitud) > 2) {
                $primero = array_shift($longitud);
                $num = '';
                foreach ($longitud as $value) {
                    $num .= $value;
                }
                $num = $primero . "." . $num;
            }
            else
                $num = $punto;
        } else {
            $num = str_replace(".", "", $punto);
            $num = str_replace(",", ".", $num);
        }



        if ($is_longitud && ($num < -100 )) {
            $tmp = $num;
            $num = substr($tmp, 0, 3) . "." . substr($tmp, 3, strlen($tmp));
        }
        
        if($is_longitud == FALSE && ($num > 15 )){
            $tmp = $num;
            $num = substr($tmp, 0, 1) . "." . substr($tmp, 1, strlen($tmp));
        }
        
        return $num;
    }

}

?>
