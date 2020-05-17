<?php



class ListeAdmin
{
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->evenement=new evenement($db);
    }
    function start(){
        if(isset($_GET['lister'])){

            $evenement=$this->evenement->lister();

        require_once("../Vues/vueListe.php");
        }
    }
}