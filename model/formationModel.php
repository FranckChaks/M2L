<?php

    function search($search){
        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu, f.date_deb, p.nom_p, p.prenom_p, a.rue, a.cp, a.numero, a.commune FROM formation f, adresse a, type_formation t, prestataire p WHERE f.id_a = a.id_a AND f.id_type = t.id_type AND f.id_p = p.id_p AND (f.contenu LIKE '%" . $search . "%')");
        $req->execute();
        return $req->fetchAll();
    }