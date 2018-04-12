<?php

    function search($search, $date_min, $date_max){
        global $bdd;

        $req = $bdd->prepare("SELECT DISTINCT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y') as date_deb, p.nom_p, p.prenom_p, a.rue, a.cp, a.numero, a.commune FROM formation f, adresse a, type_formation t, prestataire p, salarie s WHERE f.id_a = a.id_a AND f.id_type = t.id_type AND f.id_p = p.id_p AND ((f.contenu LIKE '%" . $search . "%') OR (s.nom LIKE '%" . $search . "%') OR (s.prenom LIKE '%" . $search . "%') OR (a.commune LIKE '%" . $search . "%')  OR (p.nom_p LIKE '%" . $search . "%')  OR (p.prenom_p LIKE '%" . $search . "%'))");
        $req->execute();
        return $req->fetchAll();
    }
    function searchDate($date_min, $date_max){
        global $bdd;
        $req = $bdd->prepare("SELECT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y') as date_deb FROM formation f WHERE f.date_deb >=".$date_min." AND f.date_deb <=".$date_max." ORDER BY date_deb");
        return $req->fetchAll();
    }

    function displayFormation(){

        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y') as date_deb, f.nb_j, f.id_f, f.credit, p.nom_p, p.prenom_p, a.rue, a.commune, a.numero FROM formation f, prestataire p, adresse a WHERE f.id_p = p.id_p AND f.id_a = a.id_a");
        $req->execute();
        return $req->fetchAll();
    }

    function creditLeft(){

        global $bdd;

        $req = $bdd->prepare("SELECT credit FROM salarie WHERE id_s =".$_SESSION['id']);
        $req->execute();
        return $req->fetch();
    }

    function updateCredit($credit){

        global $bdd;

        $req = $bdd->prepare("UPDATE salarie SET credit = :credit WHERE id_s=".$_SESSION['id']);
        $req->bindValue(":credit", $credit, PDO::PARAM_INT);
        $req->execute();
    }

    function formationCredit($id_f){
        global $bdd;

        $req = $bdd->prepare("SELECT credit FROM formation WHERE id_f=".$id_f);
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