<?php

$dbhost = 'localhost';
 $dbname = 'fabrica_raiz';  
 $dbuser = 'root';                  
 $dbpass = 'H0lamundo()';                  
 
 try{
  
  $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }

?>