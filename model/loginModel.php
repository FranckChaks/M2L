<?php

function login($email, $mdp)
{
    global $bdd;

    $req = $bdd -> prepare("SELECT * FROM salarie WHERE email = :email AND mdp = :mdp");
    $req->bindValue("email", $email, PDO::PARAM_STR);
    $req->bindValue("mdp", $mdp, PDO::PARAM_STR);
    $req->execute();

    return $req;

}

function rememberMe($id_s)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_s =".$id_s);
    $requete->bindValue(":id_s", $id_s, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetch();
}