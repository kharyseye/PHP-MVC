<?php
if(isset($_GET['action']))
{
    $action = $_GET['action'];

}else{
    $action="";
}
switch($action){
    case"add":
        if(isser($_POST['submit']))
        {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $classe = $_POST['classe'];
            if(empty($id) || empty($nom) || empty($prenom) || empty($classe))
            {
                $error = "Not null";
            }else{
                $db->action("insert into etudiant (nom,prenom,classe) values('$nom','$prenom','$classe')");
                header("Location:index.php?controllers=etudiant");
            }
        }
        require_once("views/add.php");
        break;
    case"edit":
        require_once("views/edit.php");
        break;
    case"delete":
        break;
    default:
        $data = $db->getdata("SELECT * FROM etudiant");
        require_once("views/index.php");
        break;
}