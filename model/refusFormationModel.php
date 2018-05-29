<?php
function refus_reservation_formation($id_s,$id_f)
{
    global $bdd;
    $requete = $bdd->prepare("DELETE FROM participer WHERE id_f IN (SELECT id_f FROM formation WHERE id_f=".$id_s.") AND id_s=".$id_f);
    $requete->execute();
}