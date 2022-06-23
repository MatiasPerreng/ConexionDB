<?php
class conexion extends PDO {


private $con;
private const USER = "mperreng";
private const PASS = "12345678";
private const DB = "3BX_Perreng";
private const PORT = "3306";
private const HOST = "192.168.1.209" . ";port=" . self::PORT;
private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB;
 

public function __CONSTRUCT(){
   try {
      
         parent::__CONSTRUCT(self::DSN, self::USER, self::PASS);

   } catch (PDOException $e) {
      throw new Exception('Falló la conexión con la DB: ' . $e->getMessage());
      
   }
}
}
?>