<?php
   function flash()
    {
        if(isset($_SESSION['flash']))
        {
            extract($_SESSION['flash']);
            unset($_SESSION['flash']);
            
            return "<div class='alert alert-$type alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong>$message</strong>
            </div>";
        }
    }

    function setFlash($message, $type = "success")
    {
        $_SESSION['flash']['message'] = $message;
        $_SESSION['flash']['type'] = $type;
    }

    function getRandomPSWD()
    {
        $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        for($i = 0; $i < 6; $i++)
        {
            $mdp = "";
            for($j = 0; $j < 2; $j++)
            {
                $mdp .= $string[rand(0,25)];
            }
            for($j = 0; $j < 2; $j++)
            {
                $mdp .= $string[rand(26,51)];
            }
            for($j = 0; $j < 2; $j++)
            {
                $mdp .= $string[rand(52,61)];
            }
            $mdp = str_shuffle($mdp);
            return $mdp;
        }
    }

    function envoiPswd($email,$message)
    {
        $headers = 'MIME-Version: 1.0'."\r\n";
        $headers .= "From: Moni CHHUON <m2l@moni-chhuon.fr>\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
        mail($email,'Votre Mot de passe M2L', $message, $headers);
    }
    function get_tous_membres()
    {
        global $bdd;
        $requete = $bdd->prepare("SELECT * FROM salarie WHERE id_c=".$_SESSION['id']);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
?>