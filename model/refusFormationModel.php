<?php
function refus_reservation_formation($id_s,$id_f)
{
    global $bdd;
    $req = $bdd->prepare("UPDATE participer SET etat = 2 WHERE id_s=:id_s AND id_f=:id_f");
    $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
    $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
    $req->execute();
    $message = "Réservation refusée";
    return $message;
    //$requete = $bdd->prepare("DELETE FROM participer WHERE id_f IN (SELECT id_f FROM formation WHERE id_f=".$id_s.") AND id_s=".$id_f);
    //$requete->execute();
}