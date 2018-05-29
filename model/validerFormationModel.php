<?php
function valid_reservation_formation($id_s,$id_f)
{
    global $bdd;
    $req = $bdd->prepare("UPDATE participer SET etat = 1 WHERE id_s=:id_s AND id_f=:id_f");
    $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
    $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
    $req->execute();
    $message = "Réservation effectuée";
    return $message;
}