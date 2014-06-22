<?php

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ItoSoftware\Front\FrontendBundle\Filter\FilterActivityPlaces;
use Symfony\Component\HttpFoundation\Request;
use ItoSoftware\Components\ModelBundle\Entity\Places;



class DefaultController extends Controller
{
 
    public function indexAction(Request $request)
    {
      
        $form = $this->get('form.factory')->create(new FilterActivityPlaces()) ;
   
         
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
        
    
        /**
         * Filtro de busqueda de puntos mas cercanos.
         */
        
        $latitude= 4564654654;
        $length = -174444444;
        $distance = 20; // Sitios que se encuentren en un radio de 20KM
        $box = $this->getBoundaries($latitude, $length, $distance);


        $query ='SELECT *, ( 6371 * ACOS( 
                                                     COS( RADIANS(' . $latitude . ') ) 
                                                     * COS(RADIANS( latitude ) ) 
                                                     * COS(RADIANS( length ) 
                                                     - RADIANS(' . $length . ') ) 
                                                     + SIN( RADIANS(' . $latitude . ') ) 
                                                     * SIN(RADIANS( latitude ) ) 
                                                    )
                                       ) AS distance 
                             FROM Places 
                             WHERE (latitude BETWEEN ' . $box['min_lat']. ' AND ' . $box['max_lat'] . ')
                             AND (length BETWEEN ' . $box['min_lng']. ' AND ' . $box['max_lng']. ')
                             HAVING distance < ' . $distance . '
                             ORDER BY distance ASC';

        
 
         
         $stmt = $this->getDoctrine()->getEntityManager()
            ->getConnection()
            ->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
        
        ladybug_dump($request);
            
        
        return $this->render('FrontFrontendBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'activities' => $actividades,
            'distance'=>$distance,
            'results' => $result
                
                  
        ));
        
        
        
            
        
    }

     public function getBoundaries($latitude, $length, $distance=20, $earthRadius = 6371)
        {
            $return = array();

            // Los angulos para cada dirección
            $cardinalCoords = array('north' => '0',
                                    'south' => '180',
                                    'east' => '90',
                                    'west' => '270');

            $rLat = deg2rad($latitude);
            $rLng = deg2rad($length);
            $rAngDist = $distance/$earthRadius;

            foreach ($cardinalCoords as $name => $angle)
            {
                $rAngle = deg2rad($angle);
                $rLatB = asin(sin($rLat) * cos($rAngDist) + cos($rLat) * sin($rAngDist) * cos($rAngle));
                $rLonB = $rLng + atan2(sin($rAngle) * sin($rAngDist) * cos($rLat), cos($rAngDist) - sin($rLat) * sin($rLatB));

                 $return[$name] = array('latitude' => (float) rad2deg($rLatB), 
                                        'length' => (float) rad2deg($rLonB));
            }

            return array('min_lat'  => $return['south']['latitude'],
                         'max_lat' => $return['north']['latitude'],
                         'min_lng' => $return['west']['length'],
                         'max_lng' => $return['east']['length']);
            
           

        }
    
        
}
