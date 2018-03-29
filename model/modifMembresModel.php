<?php
function get_infos_membres($id)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_s=".$id);
    $requete->execute();
    return $requete->fetch();
}