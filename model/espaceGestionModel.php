<?php
function get_tous_membres()
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_c=".$_SESSION['id']);
    $requete->execute();
    return $requete->fetchAll();
}
