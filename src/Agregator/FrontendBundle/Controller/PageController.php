<?php

namespace Agregator\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class PageController extends Controller
{
    
    /**
     * @Template()
     */
    public function headerAction()
    {
        return array(
        );
    }
    
    /**
     * @Template()
     */
    public function sidebarAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $categorii = $em->getRepository('AgregatorFrontendBundle:Categorie')
                ->findAll();

        return array(
            'categorii' => $categorii,
        );
    }
    
    /**
     * @Template()
     */
    public function navigationAction()
    {
        return array(
        );
    }
    
}