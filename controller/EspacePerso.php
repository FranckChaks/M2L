<?php
require "model/EspacePersoModel.php";

    $req = displayFormations();
    $credit = displayCredit();
    $info = displayInfo();
    foreach($req as $k=>$v){
        if($v['etat'] == 0){
            $message = "En attente...";
        }
        if($v['etat'] == 1){
            $message = "Validée";
        }
        if($v['etat'] == 2){
            $message = "Refusée";
        }

    }

require "view/EspacePersoView.php";