<?php

    function displayComment($id_f){
        global $bdd;

        $req = $bdd->prepare("SELECT c.contenu_com, f.contenu, DATE_FORMAT(c.date_com,'%d/%m/%Y') as date_com, s.nom, s.prenom FROM commentaire c, formation f, salarie s WHERE c.id_s = s.id_s AND c.id_f = f.id_f AND f.id_f=".$id_f);
        $req->execute();
        return $req->fetchAll();
    }

    function getTitle($id_f){
        global $bdd;

        $req = $bdd->prepare("SELECT f.contenu FROM formation f WHERE id_f =".$id_f);
        $req->execute();
        return $req->fetch();
    }

    function addComment($contenu_com, $id_f, $id_s){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO commentaire(contenu_com, date_com, id_f, id_s) VALUES (:contenu_com, NOW(), :id_f, :id_s)");
        $req->bindValue(":contenu_com",$contenu_com, PDO::PARAM_STR);
        $req->bindValue(":id_f",$id_f, PDO::PARAM_INT);
        $req->bindValue(":id_s",$id_s, PDO::PARAM_INT);
        $req->execute();
    }