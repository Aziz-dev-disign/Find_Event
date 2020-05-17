<?php
class Add_update
{
    private $ajouter;
    function __construct() {
        $base= new Db();
        $db= $base->connect();
        $this->ajouter= new Evenement($db);
        }

        function nomEmpty($arg){
            if ($arg!="") {
               echo $arg;
            } 
            
        }

        function valu($arg){
            if ($arg!="") {
               echo 'value="'.$arg.'"';
            } 
            
        }

        function disable($arg){
            
            if ($arg!="") {
                echo 'disabled';
             } 

        }

        function start(){

            $ajoutmodifier=$this;

            $id="";
            $categorie="";
            $nom="";
            $date_debut="";
            $date_fin="";
            $organisateur="";            
            $description="";
            $photo="";
            
            if(isset($_GET['update'])){
                
                $mod=$this->ajouter->detail($_GET['update']);

                $id=$_GET['update'];
                $categorie=$mod['categorie'];
                $nom=$mod['nom'];
                $date_debut=$mod['dateDebut'];
                $date_fin=$mod['dateFin'];
                $organisateur=$mod['organisateur'];                
                $description=$mod['descriptions'];
                $photo=$mod['photo'];
            }
            if(isset($_POST['categorie']) AND  isset($_POST['nom']) AND isset($_POST['debut']) AND isset($_POST['fin']) AND isset($_POST['organisateur']) AND isset($_POST['descriptions']) AND isset($_POST['photo']))
            {

                $this->ajouter->modifier($id,$_POST['categorie'],$_POST['nom'],$_POST['debut'],$_POST['fin'],$_POST['organisateur'],$_POST['descriptions'],$_POST['photo']);

            }

            if(isset($_POST['categorie']) AND  isset($_POST['nom']) AND isset($_POST['debut']) AND isset($_POST['fin']) AND isset($_POST['organisateur']) AND isset($_POST['descriptions']) AND isset($_POST['photo']))            
            {
                $chemin='Packages/imageEvent/'.$_POST['nom'].'.jpg';
                $this->ajouter->enregistrer($_POST['categorie'],$_POST['nom'],$_POST['debut'],$_POST['fin'],$_POST['organisateur'],$_POST['descriptions'],$chemin);
                move_uploaded_file($_FILES['photo']['tmp_name'],'Packages/imageEvent/'.trim($_POST['nom']).'.jpg');
            }

            require_once('../Vues/vueAjouter.php');
        }
            
             
}