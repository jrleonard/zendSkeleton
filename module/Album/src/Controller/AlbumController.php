<?php 
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    public function indexAction(){
	echo 'index controller action';
    }

    public function addAction(){
	echo 'add controller action';
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}
