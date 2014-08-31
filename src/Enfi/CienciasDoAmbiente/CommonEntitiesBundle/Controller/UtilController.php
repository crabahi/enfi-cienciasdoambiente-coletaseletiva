<?php

namespace Enfi\CienciasDoAmbiente\CommonEntitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UtilController extends Controller
{
    /**
     * @Template()
     */
    public function gitVersionAction()
    {
        $git_version = 'git-test-hash';
        return array('git_version' => $git_version);
    }
}
