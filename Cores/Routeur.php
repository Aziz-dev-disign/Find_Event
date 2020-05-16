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
    private $add_update;
    private $liste;
    private $connexion;
    private $user;
    private $evenement;
    private $listAdmin;

     function __construct(){
        $this->accueil=new Accueil();
        $this->add_update=new Add_update();
        $this->liste=new Liste();
        $this->connexion=new Login();
        $this->user=new User();
        $this->evenement=new Evenement();
        $this->listAdmin=new ListeAdmin();
     }

     function request(){
         if(isset($_GET['page'])){

            switch ($_GET['page']) {
                    case 'accueil':
                    $this->accueil->start();
                    break;
                
                    case 'liste':
                        $this->liste->start();
                    break;

                    case 'single':
                        $this->single->start();
                    break;

                    case 'user':
                        $this->user->start();
                    break;

                    case 'connexion':
                        $this->connexion->start();
                        break;
                    case 'listeAdmin':
                        $this->listAdmin->start();
                        break;
                        
                    case 'ajoutmodifier':
                        $this->ajoutmod->start();
                        break;

                default:
                    echo 'Page non trouvee';
                break;
            }
         }

         
     }
 }