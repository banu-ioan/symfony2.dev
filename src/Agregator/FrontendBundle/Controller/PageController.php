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
        return array(
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