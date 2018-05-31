<br>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p><b><h4>Vos informations</h4></b></p>
                <?php
                foreach($info as $k=>$v) {
                    ?>
                    <p><?= $v['nom']." ".$v['prenom']; ?></p>
                    <p><?= $v['email']; ?></p>
                    <p><?= $v['numero'] . " " . $v['rue'] . ", " . $v['commune']; ?></p>
                    <p>Date de création de votre compte :<?php $date_creation = date_create($v['date_creation']) ;  echo date_format($date_creation,'d/m/Y'); ?></p>
                    <p>Date de votre dernière connexion:<?php $date_creation = date_create($v["last_co"]) ;  echo date_format($date_creation,'d/m/Y'); ?></p>
                    <a href="index.php?p=modifMembres&id=<?=$_SESSION['id']; ?>"><button class="btn btn-default">Modifier</button></a>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Bienvenue sur votre espace personnel</h1>
            <p>Dans cet espace vous pourrez consulter l'état de vos formations, vos crédits et jours disponibles, ainsi que modifier vos informations personnelles.</p>
            <hr>
            <table class="table table-hover table-bordered table-responsive">
                <thead class="thead-dark">
                <tr>
                    <th class="th_search">Nom</th>
                    <th class="th_search">Date de début</th>
                    <th class="th_search">Crédit</th>
                    <th class="th_search">Etat</th>
                </tr>
                <tbody>
                <?php
                foreach($req as $k=>$v)
                {
                    ?>
                    <tr>
                        <td class="col-xs-3 col-md-3"><?=$v['contenu']; ?></td>
                        <td class="col-xs-3 col-md-3"><?=$v['date_deb']; ?></td>
                        <td class="col-xs-3 col-md-3"><?=$v['credit']; ?></td>
                        <td class="col-xs-3 col-md-3">
                            <?php if($v['etat'] == 0){
                                echo "<button class='btn btn-warning'>En attente...</button>";
                            }
                            else if($v['etat'] == 1){
                                echo "<button class='btn btn-success'>Validée</button>";
                            }
                            else if($v['etat'] == 2){
                                echo "<button class='btn btn-danger'>Refusée</button>";
                            } ;?>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
            <a href="index.php?p=formationController"><button class="btn btn-primary">Réserver des formations</button></a>
            <a href="index.php?p=pdfHistorique&id=<?= $_SESSION['id']; ?>"><button class="btn btn-warning">Imprimer vos formations</button></a>
            <br><br>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p><b>Crédits disponibles:</b></p>
                <p><h2><?= $credit['credit'];?></h2></p>
            </div>
            <div class="well">
                <p><b>Jours de formation disponibles:</b></p>
                <p><h2><?= $nbj['nbj'];?></h2></p>
            </div>
        </div>
        <div class="antifooter"></div>
    </div>
</div>
<br>
