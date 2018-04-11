<?php
require "model/modifMembresModel.php";
    $id = (int)$_GET["id"];
    $r = get_infos_membres($id);
    $s = get_infos_chefs();
if (isset($_POST['modif_infos_base'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $id_c = $_POST['chef'];
        modif_infos_base($id,$nom, $prenom, $email, $id_c);
    }
    header('Location:espaceGestion');
}
if (isset($_POST['modif_infos_credit'])) {
}

require "view/modifMembresView.php";