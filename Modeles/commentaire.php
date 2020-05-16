<?php

  class commentaire{
      
    private $base;
    function __construct($db){
        $this->base=$db;
    }

      function getAll($id){
          $select= $this->base->prepare('SELECT * FROM commentaire WHERE eve_id=:id');
          $select->execute(array("id"=>$id));
          $commentaire=$select->fetchAll();
          return $commentaire;
      }

      function register($id,$nom,$contenu){
        echo $id.'--'.$nom.'--'.$contenu;
        $inser= $this->base->prepare('INSERT INTO commentaire(eve_id,nom,contenu ) VALUES(:eve_id, :nom, :contenu)');
        $inser->execute(array(
          'eve_id'=>$id,
          'nom'=>$nom,
          'contenu'=>$contenu,
        ));
      }
  }