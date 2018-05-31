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
        return $requete->fetchAll();
    }

    function formationCredit($id_f){

        global $bdd;

        $req = $bdd->prepare("SELECT credit,nb_j FROM formation WHERE id_f=".$id_f);
        $req->execute();

        return $req->fetch();
    }

    function creditEmploye($id_s){

        global $bdd;

        $req = $bdd->prepare("SELECT credit,nbj FROM salarie WHERE id_s =".$id_s);
        $req->execute();

        return $req->fetch();
    }

    function updateCredit($id_s, $creditLeft, $nbjLeft){

        global $bdd;

        $req = $bdd->prepare("UPDATE salarie SET credit = :creditLeft, nbj = :nbjLeft WHERE id_s=:id_s");
        $req->bindValue(":creditLeft", $creditLeft, PDO::PARAM_INT);
        $req->bindValue(":nbjLeft", $nbjLeft, PDO::PARAM_INT);
        $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
        $req->execute();
    }
    
    function displayInfo(){
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM salarie s, adresse a WHERE s.id_a = a.id_a AND id_s =".$_SESSION['id']);
        $req->execute();

        return $req->fetchAll();
    }

    function getIDPrestataire($id_f){
        global $bdd;

        $req = $bdd->prepare("SELECT id_p FROM prestataire WHERE id_p IN (SELECT id_p FROM formation WHERE id_f=".$id_f.")");
        $req->execute();
        return $req->fetch();
    }

    function getInfoFormation($id_f){
       global $bdd;
        $req = $bdd->prepare("SELECT * FROM formation WHERE id_f =".$id_f);
        $req->execute();
        return $req->fetch();
    }
    function historiqueFormation($id_f,$id_s,$date_f,$nbjour,$credit){
       global $bdd;
        $req = $bdd->prepare("INSERT INTO historique (id_f, id_s, date_f, coutJour, coutCredit) VALUES (:id_f, :id_s, :date_f, :coutJour, :coutCredit)");
        $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
        $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
        $req->bindValue(":date_f", $date_f, PDO::PARAM_STR);
        $req->bindValue(":coutJour", $nbjour, PDO::PARAM_INT);
        $req->bindValue(":coutCredit", $credit, PDO::PARAM_INT);
        $req->execute();
    }
?>