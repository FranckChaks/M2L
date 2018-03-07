<?php

    function search($search){
        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, f.date_deb, p.nom_p, p.prenom_p, a.rue, a.cp, a.numero, a.commune FROM formation f, adresse a, type_formation t, prestataire p WHERE f.id_a = a.id_a AND f.id_type = t.id_type AND f.id_p = p.id_p AND (f.contenu LIKE '%" . $search . "%')");
        $req->execute();
        return $req->fetchAll();
    }

    function displayFormation(){

        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, f.date_deb, f.nb_j, f.id_f, f.credit, p.nom_p, p.prenom_p, a.rue, a.commune, a.numero FROM formation f, prestataire p, adresse a WHERE f.id_p = p.id_p AND f.id_a = a.id_a");
        $req->execute();
        return $req->fetchAll();
    }

    function creditLeft(){

        global $bdd;

        $req = $bdd->prepare("SELECT credit FROM salarie WHERE id_s =".$_SESSION['id']);
        $req->execute();
        return $req->fetch();
    }

    function addFormation($id_s, $id_f){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO participer VALUES (:id_s, :id_f, 0)");
        $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
        $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
        $req->execute();
    }