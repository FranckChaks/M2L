<?php
//    if (isset($_SESSION['connecte']))
//    {
//        echo "Nombre de personnes connectée : ".countConnect();
        ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Maison des Ligues de Lorraines </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="accueil">Accueil</a></li>
                    <li class=""><a href="EspacePerso">Espace personnel</a></li>
                    <?php if (isset($_SESSION['lvl']) AND $_SESSION['lvl']>0){ ?>
                    <li class=""><a href="espaceGestion">Gestion employés</a></li>
                    <?php } ?>
                    <li class=""><a href="formationController">Formations</a></li>
                    <li class=""><a href="Documentation">Documentation</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php // } ?>