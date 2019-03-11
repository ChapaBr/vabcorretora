<?php 
class Conn extends PDO{
   private $conn;

   public function __construct(){
        // $this->conn = new \PDO("mysql:host=localhost;dbname=db_vabcorretora", "root", "root");
        $this->conn = new \PDO("mysql:host=camposwebsolutions.com.br;dbname=camposwe_vabcorretora", "camposwe_boss", "nicolas1408");
   }

   //pasando os parametro de uma query para o bind 
   public function setParams($stmt, $params = []){
       foreach($params as $key => $value){
           $this->setParam($stmt, $key, $value);
       }
   }

   //seta apenas um parametro para a query
   private function setParam($stmt, $key, $value){
       $stmt->bindParam($key, $value);
   }

   //prepara a query para ser executada
   public function query($rawquery, $params = []){
       $stmt = $this->conn->prepare($rawquery);

       $this->setParams($stmt, $params);

       $stmt->execute();

       return $stmt;
   }

   public function select($rawquery, $params = []){
       $stmt = $this->query($rawquery, $params);

       return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }
}