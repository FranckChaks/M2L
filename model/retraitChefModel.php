<?php

function retraitPersonneChef($id){
    global $bdd;
    $requete = $bdd->prepare("UPDATE salarie SET estChef=0, id_c='".$_SESSION['id']."' WHERE id_s=".$id );
    $requete->execute();
}