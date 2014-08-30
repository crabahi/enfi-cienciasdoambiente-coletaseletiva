<?php

namespace Enfi\CienciasDoAmbiente\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/user", name="user")
     * @Template()
     */
    public function userAction()
    {
        return array();
    }

    /**
     * @Route("/map", name="map")
     * @Template()
     */
    public function mapAction()
    {
        return array();
    }
}
