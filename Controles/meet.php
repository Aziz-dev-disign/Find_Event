<?php

class Meet
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
        $evenement=$this->evenement->lister();
        if(isset($_GET['id'])){
            $evenement=$this->evenement->detail($_GET['id']);
            $commentaire=$this->commentaire->getAll($evenement['id']);
            if(isset($_POST['pseudo']) AND isset($_POST['commentaire'])) {
                $this->commentaire->register($_GET['id'],$_POST['pseudo'],$_POST['commentaire'],$_POST['contenu']);
            }
        }
        require('Vues/vueMeet.php');
    }
}