<div class="container">
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
                                    <td><span><?= $v["nom"]; ?></span></td>
                                    <td>
                                        <?= $v["prenom"]; ?>
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
        <h1 class="center">Ajouter un salarié</h1>
        <div class="row">
            <form action="#" method="post">
                <h2>Adresse du salarié</h2>
                <div class="form-group">
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
                <h2>Informations du salarié</h2>

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

                <input type="submit" class="btn btn-default" name="submit">
            </form>
        </div>
    </div>
</div>
</div>