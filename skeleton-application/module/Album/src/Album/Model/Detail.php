<?php 
namespace Album\Model;

 class Detail
 {
     public $id;
     public $first_name;
     public $last_name;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->first_name = (!empty($data['first_name'])) ? $data['first_name'] : null;
         $this->last_name  = (!empty($data['last_name'])) ? $data['last_name'] : null;
     }
 }