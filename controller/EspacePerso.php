<?php
require "model/EspacePersoModel.php";

    $req = displayFormations();
    $credit = displayCredit();
    $nbj = displayJour();
    $info = displayInfo();
    foreach($req as $k=>$v){
        if($v['etat'] == 0){
            $message = "<button class='btn btn-warning'>En attente...</button>";
        }
        else if($v['etat'] == 1){
            $message = "<button class='btn btn-success'>Validée</button>";
        }
        else if($v['etat'] == 2){
            $message = "<button class='btn btn-danger'>Refusée</button>";
        }

    }

require "view/EspacePersoView.php";