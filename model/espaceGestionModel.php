<?php
function get_tous_membres_admin()
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_s NOT IN (SELECT id_s FROM salarie WHERE id_s='".$_SESSION['id']."')");
    $requete->execute();
    return $requete->fetchAll();
}

function addMembre($nom, $prenom, $email, $randomPswd, $id_a, $id_c){
    global $bdd;
    $req = $bdd->prepare("INSERT INTO salarie (nom, prenom, email, mdp, id_a, id_c) VALUES (:nom, :prenom, :email, :randomPswd,:id_a, :id_c)");

    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->bindValue(":randomPswd", $randomPswd, PDO::PARAM_STR);
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

function displayUncheckedFormation(){
    global $bdd;
    $req = $bdd->prepare("SELECT DISTINCT s.prenom, s.nom, contenu, s.id_s, f.id_f FROM salarie s, participer p, formation f WHERE p.etat = 0 AND estChef = 1 AND s.id_s = p.id_s AND f.id_f = p.id_f AND id_c = ".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}