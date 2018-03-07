<div class="container">
    <section><h2>Votre espace personnel</h2></section>

    <div class="formations">
        <p class="title_formations">Vos formations</p>

        <table class="table table-hover table-bordered table-responsive">
            <thead>
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
                    <td class="col-xs-3 col-md-3"><b><?= $message;?></b></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="formations">
        <p class="title_formations">Vos crédits:<?= $credit['credit'];?></p>
    </div>

    <div class="formations">
        <p class="title_formations">Vos informations:</p>
        <?php
        foreach($info as $k=>$v) {
            ?>
            <b><?= $v['nom']; ?><br>
            <?= $v['prenom']; ?><br>
            <?= $v['email']; ?><br>
            <?= $v['numero'] . " " . $v['rue'] . ", " . $v['commune']; ?></b>
            <?php
        }
        ?>
    </div>
</div>
