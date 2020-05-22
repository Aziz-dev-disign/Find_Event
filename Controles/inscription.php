<?php

class Inscription
{
    private $admin;
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new admin($db);
    }

    public function valu($arg)
        {
            if ($arg!="") {
               echo 'value="'.$arg.'"';
            } 
            
        }

    function start()
    {
        $add_update=$this;

            $id="";
            $nom="";
            $prenom="";
            $mail="";
            $mdp="";
            
            if (isset($_POST['formulaire']))
            {
                
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars($_POST['mail']);
                $mail2 = htmlspecialchars($_POST['mail2']);
                $mdp = sha1($_POST['mdp']);
                $mdp2 = sha1($_POST['mdp2']);

                if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
                {
                    $nomlength = strlen($nom);
                    if ($nomlength <= 255) 
                    {
                        if ($mail == $mail2) 
                        {
                            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
                            {
                                $reqmail =$base->prepare('SELECT * FROM admin WHERE mail=?');
                                $reqmail->execute(array($mail));
                                $mailexixte = $reqmail->rowCount();
                                if ($mailexixte == 0) {
                                
                                    if ($mdp == $mdp2) 
                                    {
                                        $this->admin->creer();
                                        $msg = 'votre compte a bien ete creer';     
                                        header("location:index.php?page=add_update");                                    }
                                    else 
                                    {
                                        $msg = 'les mots de passe ne correspondent pas';
                                    }                      
                                }
                                else {
                                    $msg = 'Mail deja utiliser'; 
                                }
                            }
                            else 
                            {
                                $msg = 'Votre adresse mail n\'est pas valide !';  
                            }
                        }
                        else 
                        {
                            $msg = 'les mails ne correspondent pas';
                        }
                    }

                    else 
                    {
                        $msg = 'votre speudo ne doit pas depasser 255 caractere';
                    }
                } 
                else
                {    
                $msg = 'Tout les champs doivent etre renseigner';  
                }
            }


            if(isset($_GET['suppr'])) {
                $this->admin->supprimer($_GET['suppr']);
                header("location:index.php?page=add_update");
            }
            if(isset($_POST['mdp'])) {
                $this->admin->modifPass($_POST['mdp'],$_SESSION["id"]);
                header("location:index.php?page=inscription");
            }
            require('Vues/vueInscription.php');
    }
}