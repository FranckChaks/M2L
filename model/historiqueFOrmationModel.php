<?php
function getHistorique($id_s){
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM historique WHERE id_s =".$id_s);
    $req->execute();
    return $req->fetchAll();
}

function getInfoPerso($id_s){
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM salarie, adresse WHERE id_s =".$id_s);
    $req->execute();
    return $req->fetch();
}

function getFormation($id_s){
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM salarie s, adresse a,formation f, prestataire p , historique h WHERE h.id_f = f.id_f AND h.id_s = s.id_s AND s.id_a = a.id_a AND f.id_p = p.id_p AND s.id_s =".$id_s);
    $req->execute();
    return $req->fetchAll();
}
?>