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
            <div class="space">

            </div>


        </div>
    </div>
</div>

