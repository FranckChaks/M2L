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

    function addPrestataireAdress($rue, $numero, $commune, $cp){
    global $bdd;

        $req = $bdd->prepare("INSERT INTO adresse (rue, numero, commune, cp) 
                                  VALUES (:rue, :numero, :commune, :cp)");
        $req->bindValue(":rue", $rue, PDO::PARAM_STR);
        $req->bindValue(":numero", $numero, PDO::PARAM_INT);
        $req->bindValue(":commune", $commune, PDO::PARAM_STR);
        $req->bindValue(":cp", $cp, PDO::PARAM_STR);
        $req->execute();
    }
    function addPrestataire($nom_p,$prenom_p,$id_a){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO prestataire (nom_p,prenom_p,id_a) 
                                      VALUES (:nom_p, :prenom_p, :id_a)");
        $req->bindValue(":nom_p", $nom_p, PDO::PARAM_STR);
        $req->bindValue(":prenom_p", $prenom_p, PDO::PARAM_STR);
        $req->bindValue(":id_a", $id_a, PDO::PARAM_STR);
        $req->execute();
    }
    function ajouterFormation($contenu,$prerequis,$date_deb,$nb_j,$credit,$id_p,$id_type,$id_a){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO formation (contenu, prerequis, date_deb, nb_j, credit, id_p, id_type, id_a) VALUES (:contenu, :prerequis, :date_deb, :nb_j, :credit, :id_p, :id_type, :id_a)");
        $req->bindValue(":contenu", $contenu, PDO::PARAM_STR);
        $req->bindValue(":prerequis", $prerequis, PDO::PARAM_STR);
        $req->bindValue(":date_deb", $date_deb, PDO::PARAM_STR);
        $req->bindValue(":nb_j", $nb_j, PDO::PARAM_INT);
        $req->bindValue(":credit", $credit, PDO::PARAM_INT);
        $req->bindValue(":id_p", $id_p, PDO::PARAM_INT);
        $req->bindValue(":id_type", $id_type, PDO::PARAM_INT);
        $req->bindValue(":id_a", $id_a, PDO::PARAM_INT);
        $req->execute();
    }
    function showPrestataire(){

        global $bdd;

        $req = $bdd->prepare("SELECT * FROM prestataire");
        $req->execute();

        return $req->fetchAll();
    }
    function addTypeFormation($libelle){

        global $bdd;

        $req = $bdd->prepare("INSERT INTO type_formation(libelle) VALUES (:libelle)");
        $req->bindValue(":libelle", $libelle, PDO::PARAM_STR);
        $req->execute();
    }