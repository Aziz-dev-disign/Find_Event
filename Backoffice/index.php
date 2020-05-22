<?php
if(!isset($_GET['page']))
{
$_GET['page']='connexion';
}
include_once('../Cores/Routeur.php');
$router=new Router();
$router->request();