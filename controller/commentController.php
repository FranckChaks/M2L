<?php
require "model/commentModel.php";
$id_f = (int)$_GET['id'];
$req = displayComment($id_f);
$title = getTitle($id_f)[0];

if(isset($_POST['submit'])){
    $contenu_com = $_POST['contenu_com'];
    $id_s = $_SESSION['id'];
//    var_dump($id_s);
//    var_dump($id_f);
//    var_dump($contenu_com);

    addComment($contenu_com, $id_f, $id_s);
    header("Refresh:0");
}

require "view/commentView.php";