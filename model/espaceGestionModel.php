<?php
function get_tous_membres()
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_c=".$_SESSION['id']);
    $requete->execute();
    return $requete->fetchAll();
}

function addMembre($nom, $prenom, $email, $id_a, $id_c){
    global $bdd;
    $req = $bdd->prepare("INSERT INTO salarie (nom, prenom, email, id_a, id_c) VALUES (:nom, :prenom, :email, :id_a, :id_c)");

    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->bindValue(":id_a", $id_a, PDO::PARAM_INT);
    $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
    $req->execute();
}

function addAdresse($rue, $numero, $commune, $cp){
    global $bdd;
    $req = $bdd->prepare("INSERT INTO adresse (rue, numero, commune, cp) VALUES (:rue, :numero, :commune, :cp)");
    $req->bindValue(":rue", $rue, PDO::PARAM_STR);
    $req->bindValue(":numero", $numero, PDO::PARAM_INT);
    $req->bindValue(":commune", $commune, PDO::PARAM_STR);
    $req->bindValue(":cp", $cp, PDO::PARAM_STR);
    $req->execute();
}