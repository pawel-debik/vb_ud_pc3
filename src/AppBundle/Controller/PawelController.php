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
    public function portfolioitemAction(Request $request)
    {
        
    }
    public function homeAction(Request $request)
    {
        $Projects = new DataObject\Project\Listing();
        
        $this->view->foo = 'bla';
        $this->view->projects = $Projects;
        
    }
    public function footerAction(Request $request)
    {
        
    }
    public function portfolioAction(Request $request)
    {

        // This gets all the data objects with the name "Project"
        $Projects = new DataObject\Project\Listing();
        $this->view->projects = $Projects;

        // This gets all the documents under parentId 9 (portfolio folder)
        $portfolioItems = new \Pimcore\Model\Document\Listing();
        $portfolioItems->setCondition("`parentId` = 9");
        $portfolioItems->getTotalCount(); 
        $portfolioItems->loadIdList(); 

        //$this->view->portfolioItems = $portfolioItems;
        
        foreach($portfolioItems as $item) {
            // echo 'id = ' . $item->getId(); // getId or other methods https://pimcore.com/docs/api/master/Pimcore/Model/Document/Folder.html
            
            $document = \Pimcore\Model\Document::getById($item->getId());
            $this->view->portfolioItems .= $document;
           /*
            if($document) {
                $wysiwygElement = $document->getElement('excerpt');
                var_dump($wysiwygElement->getData());
            }
            */
        }
        




    }
    public function blogAction(Request $request)
    {
        
    }
    public function photographyAction(Request $request)
    {
        
    }
    public function aboutAction(Request $request)
    {
        
    }
}