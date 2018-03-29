<?php
require "model/espaceGestionModel.php";

    $r = get_tous_membres();
    if(isset($_POST['submit'])){
        $rue = $_POST['rue'];
        $numero = $_POST['numero'];
        $commune = $_POST['commune'];
        $cp = $_POST['cp'];

//        var_dump($rue);
//        var_dump($numero);
//        var_dump($commune);
//        var_dump($cp);


        addAdresse($rue, $numero, $commune, $cp);
        $id_a = $bdd->lastInsertId();

        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email = $_POST['email'];

        $id_c = $_SESSION['id'];

//        var_dump($prenom);
//        var_dump($nom);
//        var_dump($email);
//        var_dump($cp);
        var_dump($id_a);
//        var_dump($id_c);
//
//        die();
        addMembre($nom, $prenom, $email, $id_a, $id_c);

        header("location:espaceGestion");
    }

require "view/espaceGestionView.php";
?>