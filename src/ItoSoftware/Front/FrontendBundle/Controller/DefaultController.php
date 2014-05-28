<?php

namespace ItoSoftware\Front\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ItoSoftware\Components\ModelBundle\Entity\User;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class DefaultController extends Controller
{
 
     /**
     * @Route("/", name="homepage", options={"sitemap" = true})
     *                                      ^ include in the sitemap with default parameters
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/faq", name="faq", options={"sitemap" = {"priority" = 0.7 }})
     *                                      ^ override the priority parameter
     * @Template()
     */
    public function faqAction()
    {
        return array();
    }

    /**
     * @Route("/about", name="about", options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     *                                      ^ override the priority and changefreq parameters
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
    

}
