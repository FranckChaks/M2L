<?php
require "model/validerFormationModel.php";


if (isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 1) {
    $id_s = $_GET['id_s'];
    $id_f = $_GET['id_f'];

    $credit = formationCredit($id_f)[0]; //credit formation
    $nbjour = formationCredit($id_f)[1]; //nbj formation

    $creditEmploye = creditEmploye($id_s)[0]; //credit employe
    $nbjourEmploye = creditEmploye($id_s)[1]; // nbj employe

    $creditLeft = $creditEmploye - $credit;
    $nbjLeft = $nbjourEmploye - $nbjour;

    if($creditLeft < 0 OR $nbjLeft < 0 )
    {   //comparaison si le salarié a assez de crédits pour s'inscrire à la formation
        header("location:espaceGestion");

    }
    else {
        //là on ajoute la formation au salarié
        //update déplacé à la validation par le chef
        valid_reservation_formation($id_s,$id_f);
        updateCredit($id_s, $creditLeft, $nbjLeft);
        header("location:espaceGestion");
    }
}else {
    header("location:espaceGestion");
}
?>?>