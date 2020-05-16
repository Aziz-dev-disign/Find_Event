<?php

class ListeAdmin
{
   private $evenement;

    function __construct() {
    $base= new Db();
    $db= $base-> connect();
    $this->evenement= new evenement($db);
    }
    function start(){

            if (isset($_GET['suppr'])) {
                $this->evenement->supprimer($_GET['suppr']);
            }
            $event=$this->evenement->lister();
            include('Vues/vueListeAdmin.php');
    }
}