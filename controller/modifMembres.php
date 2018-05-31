<?php
require "model/modifMembresModel.php";
    $id = (int)$_GET["id"];
    $r = get_infos_membres($id);
    $s = get_infos_chefs($id);
    $tableInfoPerso = displayInfo()[0]; //suppression d'un niveau de table ( array in array )
    $infoPerso = $tableInfoPerso[9]; //selection de l'information de la 10ème case du tableau ( commence à 0 ) qui correspond à id_c  

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
        $nom = ($_POST['nom']);
        $prenom = ($_POST['prenom']);
        $email = ($_POST['email']);


        
        if($_SESSION['id'] == $id || $_SESSION['lvl'] < 2){ // Si id session est l'id de la modification ( modif perso )
            $id_c = $infoPerso; // Alors id_c prends sa valeure originale 
        }else{
            header('Location:EspacePerso');
        }

        if($_SESSION['lvl'] == 2 AND $_SESSION['id'] == $id ) { //si admin et si modification non sur sa fiche perso alors id_c prends la valeure du select
            $id_c='0'; 
        }
        if($_SESSION['lvl'] == 2 AND $_SESSION['id'] != $id){
            (int)$id_c = $_POST['chef'];
        }

        if(!empty($_POST['mdp'])){
            $mdp = sha1($_POST['mdp']);
            if(!empty($_POST['mdp2'])){
                $mdp2 = sha1($_POST['mdp']);
                if($mdp = $mdp2){
                    modif_infos_base($id,$nom, $prenom, $email, $id_c,$mdp);
                }else{
                    header('Location:accueil');
                }
            }else{
                header('Location:accueil');
            }

        }
        modif_infos_base2($id,$nom, $prenom, $email, $id_c);
    }
    header('Location:EspacePerso');
        
}
if (isset($_POST['modif_infos_credit'])) {
}

require "view/modifMembresView.php";