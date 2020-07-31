<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Pimcore\Model\DataObject;

class PawelController extends FrontendController
{
    public function defaultAction(Request $request)
    {
        
    }
    public function homeAction(Request $request)
    {
        $Projects = new DataObject\Project\Listing();

        forEach ( $Projects as $project ) {
            echo $project->getTitle();
        }

        
        $this->view->foo = 'bla';
        $this->view->projects = $Projects;
        
    }
    public function footerAction(Request $request)
    {
        
    }
}