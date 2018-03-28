<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>E-mail</th>
                                <th>Crédits</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $number = 1 ;
                                foreach($r as $k=>$v){
                                    ?>
                                <tr>
                                    <td>
                                        <?= $number; ?>
                                    </td>
                                    <td><span><?= $v["nom_s"]; ?></span></td>
                                    <td>
                                        <?= $v["prenom_s"]; ?>
                                    </td>
                                    <td>
                                        <?= $v["email"]; ?>
                                    </td>
                                    <td><span><?= $v["credit"]; ?></span></td>
                                    <td><span><a href="index.php?p=modifMembres&id=<?=$v["id_s"]; ?>">Modifier</a> | <a href="">Supprimer</a></span></td>
                                </tr>
                                <?php $number++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>