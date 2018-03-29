<?php
function get_infos_membres($id)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_s=".$id);
    $requete->execute();
    return $requete->fetch();
}
function modif_infos_base($id, $nom, $prenom, $email)
{
    global $bdd;
    $req = $bdd->prepare("UPDATE salarie SET nom = :nom, prenom = :prenom, email = :email WHERE id_s = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->execute();
    $message = "Modifications effectuées";
    return $message;
}
function modif_infos_credit(){
    global $bdd;
//    $req = $bdd->prepare("UPDATE user SET ban = 1 WHERE id_u = :id_u");
//    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
//    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
//    $req->bindValue(":email", $email, PDO::PARAM_STR);
//    $req->execute();
}