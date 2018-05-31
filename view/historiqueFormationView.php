<style type="text/css">
    .th_search{border: solid 1px black} ;

</style>
<div class="container-fluid text-center">
    <div class="row content">
        <div>
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
            <p style="font-size:20px;">Voici le récapitulatif de vos formations : </p><br>
        </div>
            <div>
                <table class="table table-hover table-bordered table-responsive">
                    <thead class="thead-dark">
                    <tr>'
                        <th class="th_search">Nom de la formation</th>
                        <th class="th_search">Prestataire</th>
                        <th class="th_search">Date de début</th>
                        <th class="th_search">Coûts en Crédit</th>
                        <th class="th_search">Coût en nombre de jour</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($infoFormation as $k=>$v)
                    {
                        ?>
                        <tr>
                            <td class="col-xs-2 col-md-2"><?=$v['contenu']; ?></td>
                            <td class="col-xs-2 col-md-2"><?=$v['nom_p']; ?></td>
                            <td class="col-xs-2 col-md-2"><?php $t = new DateTime($v['date_f']); $date_formation = date_format($t,'d-m-Y'); echo $date_formation; ?></td>
                            <td class="col-xs-2 col-md-2"><?=$v['coutCredit']; ?></td>
                            <td class="col-xs-2 col-md-2"><?=$v['coutJour']; ?></td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>