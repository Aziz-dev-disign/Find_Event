<?php

class Evenement

{
    private $id="";
    private $nom="";
    private $photo="";
    private $description="";
    private $dateDebut="";
    private $dateFin="";

    function __construct($db){
        $this->base=$db;
    }

    public function enregistrer($nom,$photo,$description,$dateDebut,$dateFin) 
    {
        $event =$this->base-> prepare('INSERT INTO evenement
        (nom,photo,description,dateDebut,dateFin) VALUES (:nom,:photo,:description,:dateDebut,:dateFin)'); 
        $event->execute(array(
        "nom"=>$nom,  
        "photo"=>$photo,
        "description"=>$description,
        "dateDebut"=>$dateDebut,
        "dateFin"=>$dateFin
        ));
    }

    public function modifier($id,$nom,$photo,$description,$dateDebut,$dateFin)
    {
        $event=$this->base->prepare('UPDATE evenement SET 
        nom=:nom,photo=:photo,description=:description,dateDebut=:dateDebut,dateFin=:dateFin WHERE id = :id');
        $event->execute(array(
        "id"=>$id,
        "nom"=>$nom, 
        "photo"=>$photo,
        "description"=>$description,
        "dateDebut"=>$dateDebut,
        "dateFin"=>$dateFin
        ));
    }
    public function supprimer($id)
    {
        $event=$this->base->prepare('DELETE FROM evenement WHERE id = :id');
        $event->execute(array(
            "id"=>$id
        ));
    }

    public function lister()
    {
        $event=$this->base->query('SELECT * FROM evenement');
        $ev=$event->fetchAll();
        return $ev;
    }

    public function detail($id)
    {
        $event=$this->base->prepare('SELECT * FROM evenement WHERE id= :id');
        $event->execute(array(
            "id"=>$id
        ));
        return $event->fetch();
    }
}