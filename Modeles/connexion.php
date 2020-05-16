<?php
 class Db{
     private $bd;
     function __construct(){
            $this->bd=new PDO('mysql:host=localhost;dbname=wedding','root','');
     }

     function connect(){
         return $this->bd;
     }
 }
?>