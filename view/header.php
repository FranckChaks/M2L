<?php if (isset($_SESSION['connecte']))
{    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-12 header">
            
            <nav>
                <ul>
                   <li><h1>LOGO</h1></li>
                    <li><a href="accueil">Accueil</a></li>
                    <li><a href="EspacePerso">Espace personnel</a></li>
                    <li><a href="formationController">Formation</a></li>
                    <li>Documentation</li>
                    <li><a href="logout">Déconnexion</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>
<?php } ?>