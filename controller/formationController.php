<?php

    require "model/formationModel.php";

    if(isset($_POST['submit'])){

        $search = $_POST['search'];
        $req = search($search);
    }

    if(isset($_GET['ajouter'])){
        $id_f = $_GET['ajouter'];
        addFormation($_SESSION['id'], $id_f);
        header("location:EspacePerso");
    }

    $form = displayFormation();
    $credit = creditLeft();


    require "view/formationView.php";