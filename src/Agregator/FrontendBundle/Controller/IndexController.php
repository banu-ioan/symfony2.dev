<?php

namespace Agregator\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class IndexController extends Controller
{
    
    /**
     * Homepage.
     *
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        return array(
            'test' => 'test'
        );
    }
    
    /**
     * @Route("/categorie/{slug}", name="show_categorie")
     * @Template()
     */
    public function showCategoryAction($slug)
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $oferte = $em->getRepository('AgregatorFrontendBundle:Oferta')
                ->findAllByCategorySlug($slug);
        

        return array(
            'oferte' => $oferte,
        );
    }
    
}