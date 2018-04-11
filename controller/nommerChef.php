<?php
require "model/nommerChefModel.php";
if (isset($_SESSION['lvl']) AND $_SESSION['lvl']==3) {
    if (isset($_GET["id"])) {
        $id = (int)$_GET["id"];
        nommerPersonneChef($id);
        header("location:espaceGestion");
    } else {
        header('Location: espaceGestion');
    }
}else{  header("location:accueil"); }