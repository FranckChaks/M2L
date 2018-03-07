<?php

if(isset($_COOKIE['auth']))
{
    setcookie('auth','',time()-3600,'/','localhost',false,true);

}

session_start();
session_destroy();

header("Location:index.php");
?>