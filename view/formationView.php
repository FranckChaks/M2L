<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Maison des Ligues de Lorraine</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">Crédits restants: <?=$credit['credit'];?></a></li>
                <li class="active"><a href="#section2">Jours de formation restants: <?=$credit['nbj'];?></a></li>
            </ul><br>
            <div class="input-group">
                <form action="#" method="post">
                    <span class="input-group-btn">
                    <input type="text" class="form-control" placeholder="Rechercher une formation..." name="search">

                        <button class="btn btn-default" type="submit" name="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </form>


            </div>

        </div>


        <div class="col-sm-9">
            <h3><small>FORMATIONS</small></h3>
            <hr>
            <?php
            if(isset($_POST['submit'])){ ?>
                <p><h4>Résultats de la recherche:</h4></p>
                <table class="table table-hover table-bordered table-responsive">
                    <tr>
                        <th class="th_search">Formation</th>
                        <th class="th_search">Date</th>
                        <th class="th_search">Prestataire</th>
                        <th class="th_search">Ville</th>
                        <th class="th_search">Action</th>
                    </tr>
                    <?php
                    foreach($req as $k => $v){ ?>

                        <tr>
                            <td><?=$v['contenu'];?></td>
                            <td><?=$v['date_deb'];?></td>
                            <td><?=$v['nom_p']." ".$v['prenom_p'];?></td>
                            <td><?=$v['commune'];?></td><br>
                            <td>
                                <a href="index.php?p=formationController&ajouter=<?= $v['id_f'] ?>">
                                    <button class="btn btn-success">Ajouter</button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>



                </table>
                <hr>
                <?php
            }
            ?>
            <table class="table table-hover table-bordered table-responsive">
                <thead class="thead-dark">
                <tr>
                    <th class="th_search">Nom</th>
                    <th class="th_search">Date de début</th>
                    <th class="th_search">Jours de formation</th>
                    <th class="th_search">Crédit</th>
                    <th class="th_search">Prestataire</th>
                    <th class="th_search">Adresse</th>
                    <th class="th_search">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($form as $k=>$v){ ?>
                    <tr>
                        <td><a href="index.php?p=detailFormation&id_f=<?=$v['id_f'];?>&titre=<?=$v['contenu']; ?>"><?=$v['contenu'];?></a></td>
                        <td><?=$v['date_deb'];?></td>
                        <td><?=$v['nb_j'];?></td>
                        <td><?=$v['credit'];?></td>
                        <td><?=$v['prenom_p']." ".$v['nom_p'];?></td>
                        <td><?=$v['numero']." ".$v['rue'].", ".$v['commune'];?></td>
                        <td>
                            <a href="index.php?p=formationController&ajouter=<?= $v['id_f'] ?>">
                                <button class="btn btn-success">Ajouter</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <br>
            <?php if (isset($_SESSION['lvl']) AND $_SESSION['lvl'] == 2){ ?>
            <div class="col-sm-3 add_user">
                <p><h3>Ajouter un prestataire</h3></p>
                    <hr>
                    <form method="post">
                        <div class="form-group ">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" placeholder="nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control" placeholder="prenom" name="prenom">
                        </div>
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
                        <input type="submit" class="btn btn-success" name="submitPresta" value="Ajouter"><br><br>
                    </form>

            </div>
            <form action="#" method="post">
            <div class="col-sm-8 text-left add_user">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p><h3>Ajouter une formation</h3></p>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-6">
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
                    <div class="form-group ">
                        <label for="contenu">Intitulé</label>
                        <input type="text" class="form-control" placeholder="intitulé" name="contenu">
                    </div>
                    <div class="form-group">
                        <label for="numero">Pré-requis</label>
                        <input type="text" class="form-control" placeholder="Pré-requis" name="prerequis">
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="date_deb">Date de début</label>
                        <input type="date" class="form-control" placeholder="jj/mm/aaaa" name="date_deb">
                    </div>
                    <div class="form-group">
                        <label for="nb_j">Nombre de jours de formation</label>
                        <input type="number" class="form-control" placeholder="NB jours de formation" name="nb_j">
                    </div>
                    <div class="form-group">
                        <label for="credit">credit</label>
                        <input type="number" class="form-control" placeholder="credits" name="credit">
                    </div>
                    <div class="form-group">
                        <label for="prestataire">Prestataire</label>
                        <select class="custom-select" name="id_p">
                            <?php foreach($requete as $k=>$v){ ?>
                                <option value="<?= $v['id_p'] ?>"><?php echo $v['nom_p']." ".$v['prenom_p'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de formation</label>
                        <input type="text" class="form-control" placeholder="libellé" name="libelle">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success" name="submitFormation" value="Ajouter"><br><br>
                </div>
            </div>
            </form>

            <?php } ?>
            <div class="space">

            </div>
        </div>
    </div>
</div>


