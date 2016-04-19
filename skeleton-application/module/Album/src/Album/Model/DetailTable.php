<?php
namespace Album\Model;

 use Zend\Db\TableGateway\TableGateway;

 class DetailTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }

     public function getDetail($id)
     {
         $id  = (int) $id;
         $rowset = $this->tableGateway->select(array('id' => $id));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id");
         }
         return $row;
     }

     public function saveDetail(Detail $detail)
     {
         $data = array(
             'first_name' => $detail->first_name,
             'last_name'  => $detail->last_name,
         );

         $id = (int) $detail->id;
         if ($id == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getDetail($id)) {
                 $this->tableGateway->update($data, array('id' => $id));
             } else {
                 throw new \Exception('DEtail id does not exist');
             }
         }
     }

     public function deleteDetail($id)
     {
         $this->tableGateway->delete(array('id' => (int) $id));
     }

// public function getAlbum(){
//      $sql = "SELECT * FROM hindusim";
//         $statement = $this->tableGateway->getAdapter()->query($sql);
//         $res = $statement->execute();

//         $rows = array();
//         foreach ($res as $row) {
//             $rows[] = $row;
//         }
//         return $rows;
// }


 }
