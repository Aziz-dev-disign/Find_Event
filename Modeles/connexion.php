<?php
 class Db{
     private $bd;
     function __construct(){
            $this->bd=new PDO('mysql:host=localhost;dbname=gestion_even','root','');
     }

     function connect(){
         return $this->bd;
     }
 }
?>