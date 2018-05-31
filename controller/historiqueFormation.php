<?php
require ('model/historiqueFormationModel.php');

if(isset($_SESSION['id']) AND isset($_SESSION['lvl'])){
    $id_s = (int)$_GET['id'];
    $req = getHistorique($id_s);
    $infoPerso = getInfoPerso($id_s);
    $infoFormation = getFormation($id_s);
}else{
    header("location:EspacePerso");
}

require ('view/historiqueFormationView.php');
?>