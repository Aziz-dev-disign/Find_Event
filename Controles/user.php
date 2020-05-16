<?php


class User
{
    private $admin;
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new admin($db);
    }

    function start(){
            $liste=$this->admin->liste();
            if(isset($_POST['username'])) {
                $this->admin->creer($_POST['username'],'admin');
                header("location:index.php?page=user");
            }

            if(isset($_GET['suppr'])) {
                $this->admin->supprimer($_GET['suppr']);
                header("location:index.php?page=user");
            }
            if(isset($_POST['new_pass'])) {
                $this->admin->modifPass($_POST['new_pass'],$_SESSION["id"]);
                header("location:index.php?page=user");
            }
            require('Vues/vueInscription.php');
    }
}