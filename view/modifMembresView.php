<div id="page-wrapper">
    <div id="page-inner">
        <a href="gestionMembres" class="previous">&laquo; Retour</a>
        <div class="row">
            <div class="col-xs-10 col-sm-8 col-md-8 col-xs-offset-2">
                <form method="post">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" class="form form-control" name="nom" value="<?= $r["nom_s"]; ?>">
                        <label>Prénom:</label>
                        <input type="text" class="form form-control" name="prenom" value="<?= $r["prenom_s"]; ?>">
                        <label>Email:</label>
                        <input type="text" class="form form-control" name="nom" value="<?= $r["email"]; ?>">
                        <hr>
                        <button type="submit" name="envoyer" class="form form-control">Modifier</button>
                    </div>
                </form>
                <hr class="primary">
                <hr class="primary">
                <form method="post">
                    <div class="form-group">
                        <label>Crédits:</label>

                        <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="50" data-slider-value="<?= $r["credit"]; ?>" data-slider-enabled="false" />

                        <input id="ex1-enabled" type="checkbox"/> Autoriser Modification
                        <span id="ex1CurrentSliderValLabel">Nombre de crédits ajoutés: <span id="ex1SliderVal"><?= $r["credit"]; ?></span></span>
                        <input type="text" class="form form-control" name="nom" value="<?= $r["nom_s"]; ?>">
                        <label>Jours de formations restants:</label>
                        <input type="text" class="form form-control" name="prenom" value="<?= $r["nbj"]; ?>">
                        <hr>
                        <button type="submit" name="envoyer" class="form form-control">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>