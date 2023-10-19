<?php
class Database {    
    public function dbConnect() {        
        static $DBH = null;      
        if (is_null($DBH)) {              
			$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);			
			if($connection->connect_error){
				die("Falha ao conectar ao MYsql: " . $connection->connect_error);
			} else {
				$DBH = $connection;
			}         
        }
        return $DBH;    
    }     
}