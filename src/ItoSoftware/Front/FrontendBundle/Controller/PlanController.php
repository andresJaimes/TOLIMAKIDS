<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ItoSoftware\Front\FrontendBundle\Filter\FilterActivityPlaces;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\Expr\Join;
use ItoSoftware\Components\ModelBundle\Entity\Plan;

class PlanController extends Controller{
   
    public function planAction(Request $request)
    {
    
      $form = $this->get('form.factory')->create(new FilterActivityPlaces()) ;
       
       

         $paginator  = $this->get('knp_paginator');
         $result = null;
         $distance = 20;  
         $latitude = $request->get('latitud');
         $length = $request->get('longitud');
         
        $actividades = array();
        if ($this->get('request')->query->has($form->getName())) {
        
        /**
         * Filtro de busqueda de puntos mas cercanos.
         */
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
            
      
                
            $ids=array();

            foreach( $result as $lugar){
                $ids[]=$lugar['id'];
            }
            

            // manually bind values from the request
           
            $form->submit($this->get('request')->query->get($form->getName()));
           
             
            // initialize a query builder
            $filterBuilder = $this->get('doctrine.orm.entity_manager')
                ->getRepository('ItoModelBundle:Activity')
                ->createQueryBuilder('a')                 
                ->innerJoin('a.places', 'p', Join::WITH, "p.id IN (:ids)" )
                ->setParameter('ids', $ids);
             
            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            $paginator  = $this->get('knp_paginator');
              $actividades = $paginator->paginate(
                  $filterBuilder,
                  $this->get('request')->query->get('page', 1),
                  5
              );
              
        }
        
    
           return $this->render('FrontFrontendBundle:Plan:plan.html.twig', array(
            'form' => $form->createView(),
            'actividades' => $actividades,
            'lugares'=> $result
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
        
        
        public function crearAction(Request $request)
        {
            $ids = array();
      
    
            $activity = $request->get('ids');
 
  
            
            $act=split(";", $activity);
                   
            
            for($i=0;$act[$i];$i++){
                settype($act[$i], "int");
                
                $ids[]= $act[$i];
                 
            }
            
             
          
                 
            $queryBuilder= $this->get('doctrine.orm.entity_manager')
                ->getRepository('ItoModelBundle:Activity')
                ->createQueryBuilder('a')
                ->where("a.id IN (:ids)")
                ->setParameter('ids', $ids);
            
                $result = $queryBuilder->getQuery()->getResult();

   
            echo $queryBuilder->getDql();
            
           
            $plan = new Plan();
            
            
            
           
            $plan->setRegistrarionDate(new \DateTime('now'));
            $plan->setDate(new \DateTime('now'));
            
            
            
            
              $form = $this->createFormBuilder($plan)
                ->add('tittle', 'text')
                ->add('date', 'date')
                ->add('registrarionDate', 'date')
                ->add('active', null, array('label'=>'Activo'))
                ->add('save', 'submit', array('attr'=>array('class'=>'btn btn-info btn-sm adde'))) 
                ->getForm();
              
         $form->handleRequest($request);   

         
         if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
            $em->persist($plan);
            $em->flush();
            return new Response('News added successfuly');
           return new Response('Created product id '.$plan->getId());
            
        }
           
        
            return $this->render('FrontFrontendBundle:Plan:crear.html.twig', array(
            'actividades'=>$result,
            'form' => $form->createView(),
            
             ));
            
            
        }
        
}
?>
