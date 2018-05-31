<?php if (isset($_SESSION['connecte']))
{
    echo ' ';
}
else
{
    header('Location:login');
}
?>
<div class="jumbotron wallpaper">
    <div class="front-display">
        <div class="container text-center textstyle">
            <h1>Bienvenue</h1>
            <p class="textstyle2"><h2>Maison des ligues de Lorraine</h2></p>
        </div>
    </div>
</div>

<div class="container-fluid bg-3 text-center">
    <div class="row">

        <a href="<?=BASE_URL;?>/EspacePerso"><div class="col-md-6 bloc1">
                <div class="espace_perso">
                    <img src="assets/css/espace_perso.png">
                    <h1> Votre Espace Personnel</h1>
                </div>
            </div></a>

        <a href="<?=BASE_URL;?>/formationController"><div class="col-md-6 bloc2">
                <div class="separation">

                </div>
                <div class="section">
                    <img height="128" width="128" src="assets/css/formation.png">
                    <h1>Consulter les formations</h1>
                </div>
            </div></a>
    </div>

    <div class="row bloc6">
        <div class="col-md-6 sous_bloc1">
            <p class="titre_text_bloc1">Retrouvez nos formations</p>
            <p class="text_bloc1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, sed, minus! Quos quas, perspiciatis, magni natus pariatur officiis officia. Nobis nihil quis, facilis cupiditate minima cumque inventore possimus ducimus ullam! Doloribus, sed, minus! Quos quas, perspiciatis, magni natus pariatur officiis officia. Nobis nihil quis, facilis cupiditate minima cumque inventore possimus ducimus ullam!</p>
        </div>
        <div class="col-md-6 sous_bloc2">
            <a href="<?=BASE_URL;?>/Documentation"><button class="btn btn-primary button_bloc2"><h1>Documentation</h1></button></a>
        </div>
    </div>
</div>