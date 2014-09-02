<?php

namespace Enfi\CienciasDoAmbiente\CommonEntitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/manage", name="_manage_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
