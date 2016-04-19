<?php
namespace Album\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AlbumController extends AbstractActionController
 {
 	 protected $albumTable;

     public function indexAction()
     {
     	 return new ViewModel(array(
             'albums' => $this->getAlbumTable()->fetchAll(),
         ));
     }

     //  public function detailAction()
     // {
     //      return new ViewModel(array(
     //         'albums' => $this->getDetailTable()->fetchAll(),
     //     ));

     // }

     public function addAction()
     {
     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }

       public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }

     //    public function getDetailTable()
     // {
     //     if (!$this->albumTable) {
     //         $sm = $this->getServiceLocator();
     //         $this->albumTable = $sm->get('Album\Model\DetailTable');
     //     }
     //     return $this->albumTable;
     // }
 }
 ?>