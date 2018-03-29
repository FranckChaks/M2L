<?php
function deleteAdresseClient($id){
    global $bdd;
    $requete = $bdd->prepare("DELETE FROM adresse WHERE id_a IN (SELECT id_a FROM salarie WHERE id_s=".$id.")");
    $requete->execute();
}
function deleteMembres($id){
    global $bdd;
    $requete = $bdd->prepare("DELETE FROM salarie WHERE id_s =".$id);
    $requete->execute();
}
