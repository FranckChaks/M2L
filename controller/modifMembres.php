<?php
require "model/modifMembresModel.php";
    $id = $_GET["id"];
    $r = get_infos_membres($id);

require "view/modifMembresView.php";