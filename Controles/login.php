<?php
class Login
{
   
    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new Admin($db);
    }
    function start(){
        if(isset($_POST["mail"]) AND isset($_POST["mdp"])){
            $admi=$this->admin->isAdmin($_POST["mail"],$_POST["mdp"]);
            if ($admi!=false)
            {
                $_SESSION["id"]=$admi["id"];
                header("location:index.php?page=user");
            }
            else{
                header("location:index.php?page=login");
            }

        }
        include("Vues/vueInscription.php");
    }
}