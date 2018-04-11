<?php
function nommerPersonneChef($id){
    global $bdd;
    $requete = $bdd->prepare("UPDATE salarie SET estChef=2, id_c='".$_SESSION['id']."' WHERE id_s=".$id );
    $requete->execute();
}