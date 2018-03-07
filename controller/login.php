<?php
require "model/loginModel.php";

if(isset($_SESSION['connecte'])){
    header("location:".BASE_URL."/accueil");
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $mdp = sha1($_POST['mdp']);

    $req = login($email, $mdp);
    $message = "";
    $i = 0;

    if($reponse = $req->fetch())
    {
        $_SESSION['connecte'] = true;
        $_SESSION['id'] = $reponse['id_s'];
        $_SESSION['email'] = $reponse['email'];
        $_SESSION['lvl'] = $reponse['lvl'];
        if(isset($_POST['remember']))
        {
////                $key = $reponse['id_u']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
            setcookie('auth',$reponse['id_s']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
            //le dernier argument evite que le cookie soit editable en javascript


        }

        header("location:".BASE_URL."/accueil");
    }
    else
    {
        $i++;
        $message = "Mauvais identifiants";
    }

}
if(isset($_COOKIE['auth']))
{
    $auth = $_COOKIE['auth'];
    $auth = explode('-----',$auth);
    $reponse = rememberMe($auth[0]);
    $key = sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);


    if($key == $auth[1])
    {
        $_SESSION['connecte'] = true;
        $_SESSION['id'] = $auth[0];
        $_SESSION['lvl'] = $reponse['lvl'];

        setcookie('auth', $reponse['id_s']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
        header("location:".BASE_URL."/accueil");
    }
    else
    {
        setcookie('auth','',time()-3600,'/','localhost',false,true);

    }
}

require "view/loginView.php";