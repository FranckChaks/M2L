<?php
require "model/suppMembresModel.php";

if(isset($_GET["id"])){
    $id = (int)$_GET["id"];
    deleteAdresseClient($id);
    deleteMembres($id);
    header("location:espaceGestion");
}else{
    header('Location: espaceGestion');
}