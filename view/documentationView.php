<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <br>
                <li class="active"><a href="#section1">Documentation</a></li>
            </ul><br>
            <div class="input-group">


            </div>
        </div>

        <div class="col-sm-9">

            <h2>Bienvenue sur la Maison des Ligues de Lorraine !</h2>
            <hr>
            <p>Sur cette page vous trouverez toute l'aide nécessaire si jamais vous rencontrez un problème ou cherchez une solution de tout type.</p>
            <br>

            <hr>
            <h2>Votre Espace Personnel</h2>
            <a href="<?=BASE_URL;?>/EspacePerso"><h5><span class="label label-success">Accéder à votre espace personnel</span></h5><br></a>
            <p>Sur cet espace, vous trouverez toutes les informations de votre compte (email, nom, prénom), ainsi que vos crédits et nombre de jours restants et vos formations sportives validées / refusées ou en attentes. <b>Votre chef est le seul qui puisse valider ou non une formation.</b></p>
            <br>
            <p>Vous disposez de <b>15 jours de formations et de 5000 crédits par an</b>. Chaque formation a son coût en crédit et en jour, donc veuillez faire attention à choisir la formation qui vous convient le mieux ! </p><br>
            <p>Vous pouvez <b>modifier vos informations (nom, prénom, mot de passe et email)</b> en cliquant sur <button class="btn btn-default">Modifier</button> dans le cadre bleu situé à gauche de vos formations.<br>
                Vous avez aussi <b>la possibilité d'imprimer les formations validées</b> en cliquant sur ce bouton <button class="btn btn-warning">Imprimer vos formations</button></p>
            <hr>

            <h2>Les Formations</h2>
            <a href="<?=BASE_URL;?>/formationController"><h5><span class="label label-success">Accéder aux formations</span></h5><br></a>
            <p>Sur cet espace, vous trouverez toutes les formations disponibles avec leurs informations nécéssaires (date de début, coût en crédits et en jours, prestataires...)<br>
            <p>Pour vous inscrire à une formation, il vous suffit simplement de cliquer sur le bouton <button class="btn btn-success">Ajouter</button> situé à droite de la formation. Une fois cette dernière séléctionnée, vous serez redirigez vers votre espace personnel où la formation sera en attente de validation par votre supérieur <b>(<button class="btn btn-warning">En attente...</button>)</b> </p><br>
            <p>Une formation peut donc avoir trois états, différenciable par leur couleur: <button class="btn btn-success">Validée</button> <button class="btn btn-danger">Refusée</button> <button class="btn btn-warning">En attente..</button> </p><br>
            <p><b>Vous pouvez recherchez une formation sportive en particulier en utilisant la barre de recherche située sur la gauche de la page.</b></p>
            <hr>

            <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 0){ ?>
            <h2>Gestion des employés</h2>
            <a href="<?=BASE_URL;?>/espaceGestion"><h5><span class="label label-success">Accéder à l'espace gestion des employés</span></h5><br></a>
                <p>Sur cet espace reservé aux chefs, vous avez la possibilité de consulter vos salariés, ainsi que leurs nombre de crédits restants, d'ajouter un nouveau salarié à votre équipe en remplissant <b>tous les champs</b> nécessaires à la création du nouveau membre.</p>
                <p><b>Pour valider une formation d'un de vos salariés</b>, il suffit simplement <b>d'accepter ou refuser</b> dans les demandes de formations en attentes,<b>affichées en haut à droite de la page</b>.</p>
                <p><b>Vos formations sont directement validées</b> quand vous la choisissez si vous avez le nombre de crédits et de jours nécessaires.</p>
            <hr>
            <?php } ?>

        </div>
    </div>
</div>