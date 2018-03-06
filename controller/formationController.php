<?php

    require "model/formationModel.php";

    if(isset($_POST['submit'])){

        $search = $_POST['search'];
        $req = search($search);
//        var_dump($req);
//        die();
    }
    require "view/formationView.php";