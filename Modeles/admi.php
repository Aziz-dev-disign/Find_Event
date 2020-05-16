<?php


class Admin{
    private $base;
   function __construct($db){
    $this->base=$db;
}
function modifPass($newpass,$id){
    echo 'newpass='.$newpass.' id='.$id;
    $modif=$this->base->prepare("UPDATE administrateur SET password=:newpass WHERE id=:id");
    $modif->execute(array(
        "newpass"=>sha1($newpass),
        "id"=>$id
    ));
}
function creer($username,$Password){
    $inserer=$this->base->prepare("INSERT INTO administrateur(username,password) VALUES(:usernameN,:passwordN)");
    $inserer->execute(array(
        "usernameN"=>$username,
        "passwordN"=>sha1($Password)
    ));
}

function supprimer($id){
    $supri=$this->base->prepare("DELETE FROM administrateur WHERE id=:id");
$supri->execute(array(
    "id"=>$id
));
}

function liste(){
    $ls=$this->base->query("SELECT * FROM administrateur");
   return $ls->fetchAll();
   }

}