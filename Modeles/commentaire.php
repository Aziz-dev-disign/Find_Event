<?php

  class Commentaire{
      
    private $base;
    function __construct($db){
        $this->base=$db;
    }

      function getAll($id){
          $select= $this->base->prepare('SELECT * FROM commentaire WHERE id=:id');
          $select->execute(array("id"=>$id));
          $commentaire=$select->fetchAll();
          return $commentaire;
      }

      function register($id,$nom,$contenu){
        echo $id.'--'.$nom.'--'.$contenu;
        $inser= $this->base->prepare('INSERT INTO commentaire(id,nom,contenu ) VALUES(:id, :nom, :contenu)');
        $inser->execute(array(
          'id'=>$id,
          'nom'=>$nom,
          'contenu'=>$contenu,
        ));
      }
  }