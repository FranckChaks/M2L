<?php

    function search($search){

        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y') 
                                        as date_deb, p.nom_p, p.prenom_p, a.rue, a.cp, a.numero, a.commune, f.id_f 
                                        FROM formation f, adresse a, type_formation t, prestataire p 
                                        WHERE f.id_a = a.id_a 
                                        AND f.id_type = t.id_type 
                                        AND f.id_p = p.id_p 
                                        AND (f.contenu LIKE '%" . $search . "%')");
        $req->execute();

        return $req->fetchAll();
    }

    function displayFormation(){

        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y')
                                        as date_deb, f.nb_j, f.id_f, f.credit, p.nom_p, p.prenom_p, a.rue, a.commune, a.numero
                                        FROM formation f, prestataire p, adresse a
                                        WHERE f.id_f
                                        NOT IN(
                                        SELECT id_f
                                        FROM participer
                                        WHERE id_s = ".$_SESSION['id'].")
                                        AND f.id_p = p.id_p
                                        AND f.id_a = a.id_a");
        $req->execute();

        return $req->fetchAll();
    }

    function creditLeft(){

        global $bdd;

        $req = $bdd->prepare("SELECT credit,nbj FROM salarie WHERE id_s =".$_SESSION['id']);
        $req->execute();

        return $req->fetch();
    }

    function addFormation($id_s, $id_f, $etat){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO participer VALUES (:id_s, :id_f, :etat)");
        $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
        $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
        $req->bindValue(":etat", $etat, PDO::PARAM_INT);
        $req->execute();
    }

    function updateCreditChef($credit, $NBJour){

        global $bdd;

        $req = $bdd->prepare("UPDATE salarie SET credit = :credit, nbj = :nbjour WHERE id_s=".$_SESSION['id']);
        $req->bindValue(":credit", $credit, PDO::PARAM_INT);
        $req->bindValue(":nbjour", $NBJour, PDO::PARAM_INT);
        $req->execute();
    }

