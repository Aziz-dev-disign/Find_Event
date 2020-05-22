<?php
 session_start();
require('Modeles/connexion.php');
function loadcontroller($class){
    if(file_exists('Controles/'.$class.'.php')){
        require_once('Controles/'.$class.'.php');
    }

    if(file_exists('Modeles/'.$class.'.php')){
        require_once('Modeles/'.$class.'.php');
    } 
}
spl_autoload_register('loadcontroller');
class Router{
    private $accueil;
    private $national;
    private $add_update;
    private $liste;
    private $login;
    private $user;
    private $evenement;
    private $inter;
    private $meet;

     function __construct(){
        $this->accueil=new Accueil();        
        $this->national=new National();
        $this->add_update=new Add_update();
        $this->liste=new Liste();
        $this->login=new Login();
        $this->inter=new International();
        $this->user=new Inscription();
        $this->evenement=new FindEven();        
        $this->meet=new Meet();
        $this->contact=new Contact(); 
     }

     function request(){
         if(isset($_GET['page'])){
            switch ($_GET['page']) {
                    case 'accueil':
                    $this->accueil->start();
                    break;

                    case 'national':
                    $this->national->start();
                    break;

                    case 'international':
                    $this->inter->start();
                    break;

                    case 'meet':
                    $this->meet->start();
                    break;

                    case 'contact':
                    $this->contact->start();
                    break;
                
                    case 'liste':
                        $this->liste->start();
                    break;

                    case 'evenement':
                        $this->evenement->start();
                    break;

                    case 'inscription':
                        $this->user->start();
                    break;

                    case 'login':
                        $this->login->start();
                        break;
                    case 'listeAdmin':
                        $this->listAdmin->start();
                        break;
                        
                    case 'add_update':
                        $this->add_update->start();
                        break;

                default:
                    echo 'Erreur 404';
                break;
            }
         }

         
     }
 }