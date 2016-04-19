<?php
namespace Album\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class DetailController extends AbstractActionController
 {
 	 protected $detailTable;
      protected $albumTable;

     public function indexAction()
     {
     	 return new ViewModel(array(
             'details' => $this->getDetailTable()->fetchAll(),
             'albums' => $this->getAlbumTable()->fetchAll(),

         ));
     }

     

     public function addAction()
     {
     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }

     //   public function getAlbumTable()
     // {
     //     if (!$this->albumTable) {
     //         $sm = $this->getServiceLocator();
     //         $this->albumTable = $sm->get('Album\Model\AlbumTable');
     //     }
     //     return $this->albumTable;
     // }

        public function getDetailTable()
     {
         if (!$this->detailTable) {
             $sm = $this->getServiceLocator();
             $this->detailTable = $sm->get('Album\Model\DetailTable');
         }
         return $this->detailTable;
     }


   public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }






 }
 ?>