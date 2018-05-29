<?php
require "model/suppMembresModel.php";
if (isset($_SESSION['lvl']) AND $_SESSION['lvl']==2) {
    if (isset($_GET["id"])) {
        $id = (int)$_GET["id"];
        deleteAdresseClient($id);
        deleteMembres($id);
        header("location:espaceGestion");
    } else {
        header('Location: espaceGestion');
    }
}else{  header("location:accueil"); }