<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-3">
            <img src="assets/img/logo.png">

            <p style="text-align: right; margin-top:-150px;" >
                <label><?= $infoPerso['nom']; ?></label>
                <label><?= $infoPerso['prenom']; ?></label><br>
                <label><?= $infoPerso['numero']; ?></label>
                <label><?= $infoPerso['rue']; ?></label><br>
                <label><?= $infoPerso['cp']; ?></label>
                <label><?= $infoPerso['commune']; ?></label><br>

            </p>
        </div>
            <div>
                <p><h4>Vos formations:</h4></p>
                <table class="table table-hover table-bordered table-responsive">
                    <thead class="thead-dark">
                    <tr>
                        <th  style="border: 1px solid black; padding-right: 15px; background:#2a2828; color:white;" class="th_search">Nom de la formation</th>
                        <th  style="border: 1px solid black; padding-right: 15px; background:#2a2828; color:white;" class="th_search">Prestataire</th>
                        <th  style="border: 1px solid black; padding-right: 15px; background:#2a2828; color:white;" class="th_search">Date de début</th>
                        <th  style="border: 1px solid black; padding-right: 15px; background:#2a2828; color:white;" class="th_search">Coûts en Crédit</th>
                        <th  style="border: 1px solid black; padding-right: 15px; background:#2a2828; color:white;" class="th_search">Coût en nombre de jour</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($infoFormation as $k=>$v)
                    {
                        ?>
                        <tr>
                            <td class="col-xs-2 col-md-2"  style="border: 1px solid black; padding-right: 15px;"><?=$v['contenu']; ?></td>
                            <td class="col-xs-2 col-md-2"  style="border: 1px solid black; padding-right: 15px;"><?=$v['nom_p']." ".$v['prenom_p']; ?></td>
                            <td class="col-xs-2 col-md-2"  style="border: 1px solid black; padding-right: 15px; text-align: right;"><?php $t = new DateTime($v['date_f']); $date_formation = date_format($t,'d-m-Y'); echo $date_formation; ?></td>
                            <td class="col-xs-2 col-md-2" style="border: 1px solid black; padding-right: 15px; text-align: right;"><?=$v['coutCredit']; ?></td>
                            <td class="col-xs-2 col-md-2" style="border: 1px solid black; padding-right: 15px; text-align: right;"><?=$v['coutJour']; ?></td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>