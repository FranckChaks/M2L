<div class="container text-center">
    <div class="col-sm-8 text-left">
        <h1>Gestion des employés</h1>
        <p>Dans cet espace vous pourrez consulter l'état de vos formations, vos crédits et jours disponibles, ainsi que modifier vos informations personnelles.</p>
        <hr>
        <table class="table table-hover table-bordered table-responsive">
            <thead class="thead-dark">
            <tr>
                <th class="th_search">Nom / Prénom</th>
                <th class="th_search">Email</th>
                <th class="th_search">Crédits</th>
                <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 1){ ?>
                    <th class="th_search">Options</th>
                <?php } ?>
            </tr>
            <tbody>
                <?php
                    foreach($r as $k=>$v){
                ?>
                <tr>
                <td class="col-xs-3 col-md-3"><?= $v["nom"]." ".$v["prenom"]; ?></td>
                <td class="col-xs-3 col-md-3">
                    <?= $v["email"]; ?>
                </td>
                <td class="col-xs-1 col-md-1" style="width: 16.66%"><span><?= $v["credit"]; ?></span></td>
                <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] == 2){ ?>
                <td class="col-xs-6 col-md-6">
                    <nav>
                        <ul>
                            <?php if($v['estChef'] == 0){ ?> 
                                <a href="index.php?p=nommerChef&id=<?=$v["id_s"]; ?>"><li>Nommer Chef</li></a>
                            <?php } ?>
                            <?php if ($v['estChef'] == 1){ ?>
                                <a href="index.php?p=retraitChef&id=<?=$v["id_s"]; ?>"><li>Retirer grade</li></a>
                            <?php } ?>
                            <a href="index.php?p=modifMembres&id=<?=$v["id_s"]; ?>"><li>Modifier</li></a>
                            <a href="index.php?p=suppMembres&id=<?=$v["id_s"]; ?>"><li> Supprimer</li></a>
                        </ul>
                    </nav>

                    

                    <?php } ?>
            </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
    <br><br><br>


    <div class="row">
        <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 0){ ?>
        <div class="col-sm-4 well">
            <h4>Demande de formations en attente</h4>
            <div class="col-sm-12 text-left">
                <div class="row">
                    <table class="table-condensed table2">
                        <tbody>
                        <?php
                        foreach($req as $k=>$v){
                            ?>
                            <tr class="test">
                                <td class="col-xs-3 col-md-3 tdstyle"><?= $v["nom"]." ".$v["prenom"]; ?></td>
                                <td class="col-xs-3 col-md-3 tdstyle"><?= $v["contenu"]; ?></td>
                                <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 0){ ?>
                                    <td  class="col-xs-4 col-md-4 tdstyle">
                                        <a href="index.php?p=validerFormation&id_s=<?=$v["id_s"]; ?>&id_f=<?=$v["id_f"]; ?>">Valider</a> |
                                        <a href="index.php?p=refusFormation&id_s=<?=$v["id_s"]; ?>&id_f=<?=$v["id_f"]; ?>">Refuser</a>
                                    </td>
                                <?php }  ?>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><br>
        <?php } ?>
        <div class="col-sm-4">
            <!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
            <!--            <p>Project 2</p>-->
        </div><br><br>
        </div><br><br>
        <?php
            if(isset($error))
            {
                echo $error;
            }
        ?>
        <div class="col-sm-8 text-left add_user">
            <div class="col-sm-6">
                <p><h3>Ajouter un salarié</h3></p>
                <hr>
                <p><h4>Adresse:</h4></p>
                <form action="#" method="post">
                    <div class="form-group ">
                        <label for="rue">Rue</label>
                        <input type="text" class="form-control" placeholder="rue" name="rue">
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="text" class="form-control" placeholder="numero" name="numero">
                    </div>
                    <div class="form-group">
                        <label for="commune">Commune</label>
                        <input type="text" class="form-control" placeholder="commune" name="commune">
                    </div>
                    <div class="form-group">
                        <label for="cp">CP</label>
                        <input type="text" class="form-control" placeholder="cp" name="cp">
                    </div>
                    <br>
            </div><br><br><br><br>
            <div class="col-sm-6">
                <p><h4>Informations du salarié:</h4></p>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" placeholder="prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <br>
                <input type="submit" class="btn btn-success" name="submit" value="Ajouter"><br><br>
                </form>
            </div>
        </div>
    </div>
</div><br>
