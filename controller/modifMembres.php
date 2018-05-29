<?php
require "model/modifMembresModel.php";
    $id = (int)$_GET["id"];
    $r = get_infos_membres($id);
    $s = get_infos_chefs($id);
    $infoPerso = displayInfo();
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
        
        if(isset($_SESSION['id']) AND $_SESSION['id'] == $id OR isset($_SESSION['lvl']) AND $_SESSION['lvl'] < 2){ // Si id session est l'id de la modification ( modif perso ) ou si le level de la session est inférieur à 2 
            $id_c = $infoPerso['id_c']; // Alors id_c prends sa valeure originale 
        }
        
        if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] == 2) { //si admin et si modification non sur sa fiche perso alors id_c prends la valeure du select
            if($_SESSION['id'] !==$id ){
                $id_c = $_POST['chef'];
            }else{
                $id_c=0;
            }
        }
        if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] < 2) {  
            if($_SESSION['id'] !==$id ){
                $id_c = $_POST['chef'];
            }else{
                $id_c=0;
            }
        }
        modif_infos_base($id,$nom, $prenom, $email, $id_c);
    }
    header('Location:espaceGestion');
}
if (isset($_POST['modif_infos_credit'])) {
}

require "view/modifMembresView.php";