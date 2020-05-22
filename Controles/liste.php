<?php
class Liste
{
    private $evenement;
 
     function __construct() {
     $base= new Db();
     $db= $base-> connect();
     $this->evenement= new Evenement($db);
     }
     function start(){
 
             if (isset($_GET['suppr'])) {
                 $this->evenement->supprimer($_GET['suppr']);
             }
             $event=$this->evenement->lister();
             require_once('Vues/vueListe.php');
     }
 }