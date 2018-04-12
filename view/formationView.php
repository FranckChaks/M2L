
<div class="container formation">

   <h1>FORMATIONS</h1>

    <form method="post" action="#">
        <label for="rechercher"></label>
        <input type="text" name="search" placeholder="Rechercher...">

        <label for="date_min" class="label_date">Entre le:
            <input type="date" name="date_min"></label>

        <label for="date_max" class="label_date">Et le:
            <input type="date" name="date_max"></label>
        <input type="submit" name="submit">
    </form>


    <?php
        if(isset($_POST['submit'])){ ?>

            <table class="table table-hover table-bordered table-responsive">
                <tr>
                    <th class="th_search">Formation</th>
                    <th class="th_search">Date</th>
                    <th class="th_search">Prestataire</th>
                    <th class="th_search">Ville</th>
                </tr>
    <?php
            foreach($req as $k => $v){ ?>

                    <tr>
                        <td><?=$v['contenu'];?></td>
                        <td><?=$v['date_deb'];?></td>
                        <td><?=$v['nom_p']." ".$v['prenom_p'];?></td>
                        <td><?=$v['commune'];?></td><br>
                    </tr>
            <?php } ?>



            </table>
    <?php
        }
    ?>
    <h3>Vos crédits restants: <?=$credit['credit'];?></h3>





    <div class="row">
        <div class="col-xs-12 col-md-12">
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                <tr>
                    <th class="th_search">Nom</th>
                    <th class="th_search">Date de début</th>
                    <th class="th_search">Durée de la formation</th>
                    <th class="th_search">Crédit</th>
                    <th class="th_search">Prestataire</th>
                    <th class="th_search">Adresse</th>
                    <th class="th_search">Action</th>
                    <th class="th_search">Commentaires</th>
                </tr>
                </thead>
                <tbody>
        <?php
            foreach($form as $k=>$v){ ?>
                    <tr>
                        <td><?=$v['contenu'];?></td>
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
                        <td><a href="index.php?p=commentController&id=<?= $v['id_f'] ?>">
                                <button class="btn btn-primary">Voir</button>
                            </a></td>
                    </tr>


          <?php
            }
        ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
