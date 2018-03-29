<?php
require "model/espaceGestionModel.php";

    $r = get_tous_membres();
    if(isset($_POST['submit'])){
        $rue = $_POST['rue'];
        $numero = $_POST['numero'];
        $commune = $_POST['commune'];
        $cp = $_POST['cp'];

        addAdresse($rue, $numero, $commune, $cp);
        $id_a = $bdd->lastInsertId();

        $randomPswd = getRandomPSWD();

        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email = $_POST['email'];

        $id_c = $_SESSION['id'];


        addMembre($nom, $prenom, $email, $id_a, $id_c);

        header("location:espaceGestion");
    }

require "view/espaceGestionView.php";
?>