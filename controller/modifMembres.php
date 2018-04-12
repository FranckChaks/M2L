<?php
require "model/modifMembresModel.php";
    $id = (int)$_GET["id"];
    $r = get_infos_membres($id);
    $s = get_infos_chefs($id);
//    $t = get_tous_membres();
//    $i = count($t);
    //while($i > 0) {
//        $i=$i-1;
//        $listeArray = $t[0];
//        $listeMembres = $listeArray;
//        var_dump($listeMembres);

    //}
//die();
if (isset($_POST['modif_infos_base'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] < 2 ) {
            $id_c = $_POST['chef'];
        }else{
            $id_c=0;
        }
        modif_infos_base($id,$nom, $prenom, $email, $id_c);
    }
    header('Location:espaceGestion');
}
if (isset($_POST['modif_infos_credit'])) {
}

require "view/modifMembresView.php";