<?php
    class db{
        private $host="localhost";
        private $db_name="x_lost";
        private $user="root";
        private $pass="";
        
        public function conection(){
            try{
                $PDO=new PDO("mysql:host=".$this->host.";db_name=".$this->db_name,$this->user,$this->pass);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>