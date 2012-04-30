<?php

namespace Agregator\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class OfertaController extends Controller
{
    
    /**
     * @Route("/oferta/{slug}", name="show_oferta")
     * @Template()
     */
    public function showAction($slug)
    {
        $em = $this->getDoctrine()
            ->getEntityManager();

        $oferta = $em->getRepository('AgregatorFrontendBundle:Oferta')
                ->findOneBySlug($slug);
        
        return array(
            'oferta'    => $oferta,
        );
    }

}