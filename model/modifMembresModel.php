<?php
function get_infos_membres($id)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_s=".$id);
    $requete->execute();
    return $requete->fetch();
}
function get_infos_chefs($id)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE estChef>0 AND id_s NOT IN (SELECT id_s FROM salarie WHERE id_s='".$id."' )");
    $requete->execute();
    return $requete->fetchAll();
}
function modif_infos_base($id, $nom, $prenom, $email, $id_c,$mdp)
{
    global $bdd;
    $req = $bdd->prepare("UPDATE salarie SET nom = :nom, prenom = :prenom, email = :email, id_c = :id_c , mdp = :mdp WHERE id_s = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
    $req->bindValue(":mdp", $mdp, PDO::PARAM_STR);
    $req->execute();
    $message = "Modifications effectuées";
    return $message;
}

function modif_infos_base2($id, $nom, $prenom, $email, $id_c)
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
function modif_infos_credit(){
    global $bdd;
//    $req = $bdd->prepare("UPDATE user SET ban = 1 WHERE id_u = :id_u");
//    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
//    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
//    $req->bindValue(":email", $email, PDO::PARAM_STR);
//    $req->execute();
}