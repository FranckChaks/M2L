<?php if (isset($_SESSION['lvl']) AND $_SESSION['lvl']==3){ ?>
<div id="page-wrapper">
    <div id="page-inner">
        <a href="gestionMembres" class="previous">&laquo; Retour</a>
        <div class="row">
            <div class="col-xs-10 col-sm-8 col-md-8 col-xs-offset-2">
                <form method="post">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" class="form form-control" name="nom" value="<?= $r["nom"]; ?>">
                        <label>Prénom:</label>
                        <input type="text" class="form form-control" name="prenom" value="<?= $r["prenom"]; ?>">
                        <label>Email:</label>
                        <input type="text" class="form form-control" name="email" value="<?= $r["email"]; ?>">
<!--                        --><?php
//                            if($_SESSION['id'] = $_GET['id']){ ?>
<!--                                <label>Mot de passe:</label>-->
<!--                                    <input type="text" class="form form-control" name="mdp" value="--><?//= $r["mdp"]; ?><!--">-->
<!--                        --><?php //   }
//                        ?>
                        <label>Affilié à:</label>
                        <select name="chef" class="form-control">
                            <?php  foreach($s as $k=>$v){ ?>
                            <option value="<?php echo $v['id_s']; ?>" <?php if($r["id_c"]==$v['id_s']){ echo "selected"; } ?>><?php echo $v['nom']; echo $v['prenom']; ?></option> <?php } ?>
                        </select>
                        <hr>
                        <button type="submit" name="modif_infos_base" class="form form-control">Modifier</button>
                    </div>
                </form>
                <hr class="primary">
                <hr class="primary">
                <form method="post">
                    <div class="form-group">
                        <label>Crédits:</label>
                        <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="50" data-slider-value="<?= $r["credit"]; ?>" data-slider-enabled="false" />

                        <input id="ex1-enabled" type="checkbox"/> Autoriser Modification |
                        <span id="ex1CurrentSliderValLabel">Valeur de la modification: <span id="ex1SliderVal">0</span></span><br/>
                        <label>Jours de formations restants:</label>
                        <input type="text" class="form form-control" name="prenom" value="<?= $r["nbj"]; ?>">
                        <hr>
                        <button type="submit" name="modif_infos_credit" class="form form-control">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }else{  header("location:accueil"); } ?>