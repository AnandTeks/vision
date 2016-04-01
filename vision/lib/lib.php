<?php
class  {
   
   public $table_account_master = "a";
   public $msg = array();

   public $getConnection = '';
   
   public function __construct($DB){
   	    $this->getConnection = $DB;
   }





   public function doStandaredQuery($query){
        $prepareQuery = $this->getConnection->query($query);
     	  $result =  $prepareQuery->fetchAll(PDO::FETCH_ASSOC);
     	  return $result;
   }








}
?>