<?php
require "model/espaceGestionModel.php";
    $req = displayUncheckedFormation();
    if (isset($_SESSION['lvl']) AND $_SESSION['lvl']== 1) {
        $r = get_tous_membres_admin();
    }else{
        $r = get_tous_membres();
    }
    if(isset($_POST['submit'])){
        $rue = $_POST['rue'];
        $numero = $_POST['numero'];
        $commune = $_POST['commune'];
        $cp = $_POST['cp'];

        addAdresse($rue, $numero, $commune, $cp);
        $id_a = $bdd->lastInsertId();

        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email = $_POST['email'];
        //génération aléatoire du mot de passe
        $randomPswd = getRandomPSWD();
        //message du mail comportant le mot de passe non crypté de l'employé
        $message = "Félicitation, votre compte M2L a été créé. Voici votre mot de passe personnel: ".$randomPswd;
        envoiPswd($email,$message);
        //cryptage du mot de passe généré
        $randomPswd = sha1($randomPswd);
        $id_c = $_SESSION['id'];


        addMembre($nom, $prenom, $email, $randomPswd, $id_a, $id_c);

        header("location:espaceGestion");
    }

require "view/espaceGestionView.php";
?>