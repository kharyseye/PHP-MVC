<?php
include("./models/crud.php");

$db = new crud();

if(isset($_GET['controllers']))
{
    $controllers = $_GET['controllers'];
}else{
    $controllers="";
}
switch($controllers){
    case'etudiant';
        require_once("controllers/index.php");
        break;
    default:
        require_once("controllers/index.php");
        break;
}
?>