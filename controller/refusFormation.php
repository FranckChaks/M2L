<?php
require "model/refusFormationModel.php";

if (isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 0) {
    $id_s = $_GET['id_s'];
    $id_f = $_GET['id_f'];
    refus_reservation_formation($id_s,$id_f);
    header("location:espaceGestion");
}else {
    header("location:espaceGestion");
}
?>