
<div class="container formation">

   <h1>FORMATIONS</h1>

    <form method="post" action="#">
        <label for="rechercher"></label>
        <input type="text" name="search" placeholder="Rechercher...">
        <input type="submit" name="submit">
    </form>


    <?php
        if(isset($_POST['submit'])){ ?>
    <nav>
        <ul>
    <?php
            foreach($req as $k => $v){ ?>


                    <li><?=$v['contenu'];?></li>
                    <li><?=$v['date_deb'];?></li>
                    <li><?=$v['nom_p']." ".$v['prenom_p'];?></li>
                    <li><?=$v['commune'];?></li>

            <?php } ?>
        </ul>
    </nav>
    <?php
        }
    ?>
    <h3>Vos crédits restants: <?=$credit['credit'];?> | Nombre de jours restants: <?=$credit['nbj'];?></h3>





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
        </div>
        
    </div>
</div>
