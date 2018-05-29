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

        if($_SESSION['lvl'] > 0){ // verification de si la personne qui réserve est un chef , si oui sa réservation, si valide, est autorisé de manière automatique, sinon il attend comme tout le monde
            $etat = 1;
            if($credit < 0 OR $NBJour < 0 )
            {   //comparaison si le salarié a assez de crédits pour s'inscrire à la formation
                echo "Vous n'avez plus assez de crédits ou votre nombre de jour est insuffisant";
            }
            else {
                //là on ajoute la formation au salarié
                //update déplacé à la validation par le chef
                updateCreditChef($credit, $NBJour);
                addFormation($_SESSION['id'], $id_f, $etat);
                header("location:EspacePerso");
            }
        }else{
            $etat = 0;
            if($credit < 0 OR $NBJour < 0 )
            {   //comparaison si le salarié a assez de crédits pour s'inscrire à la formation
                echo "Vous n'avez plus assez de crédits ou votre nombre de jour est insuffisant";
            }
            else {
                //là on ajoute la formation au salarié
                //update déplacé à la validation par le chef
                addFormation($_SESSION['id'], $id_f, $etat);
                header("location:EspacePerso");
            }
        }


    }

    $form = displayFormation();
    $credit = creditLeft();
    require "view/formationView.php";