<?php

    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","6283");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }


