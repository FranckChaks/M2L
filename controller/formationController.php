<?php

    require "model/formationModel.php";

    $requete = showPrestataire();

    if(isset($_POST['submit']))
    {
        $search = $_POST['search'];
        $req = search($search);
    }

    if(isset($_GET['ajouter']))
    {
        $id_s = $_SESSION['id'];
        $id_f = $_GET['ajouter'];
        $formation = getInfoFormation($id_f);//get info formation pour l'historique
        $date_f = $formation['date_deb'];

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
                historiqueFormation($id_f,$id_s,$date_f,$formNBJour,$formcredit);
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

    if(isset($_POST['submitPresta']))
    {
        $nom_p = htmlentities($_POST['nom']);
        $prenom_p = htmlentities($_POST['prenom']);
        $rue = htmlentities($_POST['rue']);
        $numero = htmlentities($_POST['numero']);
        $commune = htmlentities($_POST['commune']);
        $cp = htmlentities($_POST['cp']);

        addPrestataireAdress($rue,$numero,$commune,$cp);
        $id_a = $bdd->lastInsertId();
        addPrestataire($nom_p,$prenom_p,$id_a);
        header("location:espaceGestion");
    }

    if(isset($_POST['submitFormation']))
    {
        $contenu = htmlentities($_POST['contenu']);
        $prerequis = htmlentities($_POST['prerequis']);
        $date_deb = htmlentities($_POST['date_deb']);
        $nb_j = htmlentities($_POST['nb_j']);
        $credit = htmlentities($_POST['credit']);
        $id_p = htmlentities($_POST['id_p']);
        $libelle = htmlentities($_POST['libelle']);

        $rue = htmlentities($_POST['rue']);
        $numero = htmlentities($_POST['numero']);
        $commune = htmlentities($_POST['commune']);
        $cp = htmlentities($_POST['cp']);

        addPrestataireAdress($rue,$numero,$commune,$cp); // ajout d'une adresse à la bdd , même code que celui pour le prestataire
        $id_a = $bdd->lastInsertId(); // id de l'adresse de formation qui vient d'être inséré
        addTypeFormation($libelle);//ajout du libelle dans la table type formation
        $id_type = $bdd->lastInsertId(); // get l'id du type de formation

        ajouterFormation($contenu,$prerequis,$date_deb,$nb_j,$credit,$id_p,$id_type,$id_a);
        header("location:espaceGestion");
    }


    $form = displayFormation();
    $credit = creditLeft();
    require "view/formationView.php";