<?php
function valid_reservation_formation($id)
{
    global $bdd;
    $req = $bdd->prepare("UPDATE salarie SET nom = :nom, prenom = :prenom, email = :email, id_c = :id_c WHERE id_s = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
    $req->execute();
    $message = "Modifications effectuées";
    return $message;
}