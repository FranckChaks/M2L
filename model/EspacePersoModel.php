<?php

    function displayFormations(){
        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, DATE_FORMAT(f.date_deb,'%d/%m/%Y') as date_deb, f.credit, p.etat FROM formation f, salarie s, participer p WHERE p.id_s = s.id_s AND p.id_f = f.id_f AND s.id_s =".$_SESSION['id']);
        $req->execute();
        return $req->fetchAll();
    }

    function displayCredit(){
        global $bdd;

        $req = $bdd->prepare("SELECT credit FROM salarie WHERE id_s =".$_SESSION['id']);
        $req->execute();
        return $req->fetch();
    }

    function displayJour(){
        global $bdd;

        $req = $bdd->prepare("SELECT nbj FROM salarie WHERE id_s =".$_SESSION['id']);
        $req->execute();
        return $req->fetch();
    }

    