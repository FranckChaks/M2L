<?php

    require "model/formationModel.php";

    if(isset($_POST['submit']))
    {
        $search = $_POST['search'];
        $req = search($search);
    }

    if(isset($_GET['ajouter']))
    {
        $id_f = $_GET['ajouter'];
        $formcredit = formationCredit($id_f)[0]; //credit formation
        $credit = creditLeft()[0];              //credit salarie
        $credit = $credit - $formcredit;

        $formNBJour = formationCredit($id_f)[1]; //nbJour formation
        $NBJour = creditLeft()[1]; //nbJour salarie
        $NBJour = $NBJour - $formNBJour;
        if($credit < 0 OR $NBJour < 0 )
        {   //comparaison si le salarié a assez de crédits pour s'inscrire à la formation
            echo "Vous n'avez plus assez de crédits ou votre nombre de jour est insuffisant";
        }
        else {
            //là on ajoute la formation au salarié
            //update déplacé à la validation par le chef
            //updateCredit($credit);
            addFormation($_SESSION['id'], $id_f);
            header("location:EspacePerso");
        }
    }

    $form = displayFormation();
    $credit = creditLeft();
    require "view/formationView.php";