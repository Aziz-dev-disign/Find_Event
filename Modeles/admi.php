<?php


class Admin{

    private $id="";
    private $nom="";
    private $prenom="";
    private $mail="";
    private $motdepasse="";

    private $base;
   function __construct($db){
    $this->base=$db;
}
function isAdmin($username,$Password){
    $verif=$this->base->prepare("SELECT * FROM administrateur WHERE mail=:idt AND motdepasse=:pass");
    $verif->execute(array(
        "idt"=>$username,
        "pass"=>sha1($Password),
    ));
    $admi=$verif->fetch();
    print_r($admi);
    if(count($admi)!=0){
        return $admi;
    }
    else{ 
        return false;
    }
}

function updateProfil($id,$nom,$prenom,$mail,$motdepasse){
    $modif=$this->base->prepare("UPDATE administrateur SET nom=:nom, prenom=:prenom, mail=:mail, motdepasse=:mdp WHERE id=:id");
    $modif->execute(array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "mail"=>$mail,
        "mdp"=>sha1($motdepasse),
        "id"=>$id
    ));
}
function creer($nom,$prenom,$mail,$motdepasse){
    $inserer=$this->base->prepare("INSERT INTO administrateur(nom, prenom, mail, modepasse) VALUES(:nom, :prenom, :mail, :mdp)");
    $inserer->execute(array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "mail"=>$mail,
        "mdp"=>sha1($motdepasse)
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