<?php

include_once('Modeles/commentaire.php');
include_once('Modeles/evenement.php');

class Evenement
{
    private $commentaire;
    private $evenement;
    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->commentaire=new Commentaire($db);
        $this->evenement=new Evenement($db);
    }

    function start(){
        if(isset($_GET['id'])){
            $evenement=$this->evenement->detail($_GET['id']);
            $commentaire=$this->commentaire->getAll($evenement['id']);
            if(isset($_POST['pseudo']) AND isset($_POST['descriptions'])) {
                $this->commentaire->register($_GET['id'],$_POST['pseudo'],$_POST['descriptions']);
            }
        }
        require('Vues/vueNational.php');
        require('Vues/vueIternational.php');
        require('Vues/vueMeet.php');
    }
}