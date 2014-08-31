<?php

namespace Enfi\CienciasDoAmbiente\CommonEntitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Finder\Finder;

class UtilController extends Controller
{
    /**
     * @Template()
     */
    public function gitVersionAction()
    {
        $finder = new Finder();
        $finder->files()->name('git-current-commit.txt');
        foreach ($finder as $file) {
                $git_version = $file->getContents();
        }
        return array('git_version' => $git_version);
    }
}
