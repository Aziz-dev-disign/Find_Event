<?php
if(!isset($_GET['page']))
{
$_GET['page']='accueil';
}
include_once('Cores/Routeur.php');
$router=new Router();
$router->request();