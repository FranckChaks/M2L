<?php
if (isset($_SESSION['lvl']) AND $_SESSION['lvl']=='3'){

}
if (isset($_SESSION['lvl']) AND $_SESSION['lvl']=='2'){

}

if (isset($_SESSION['lvl']) AND $_SESSION['lvl']!=='2' AND $_SESSION['lvl']!=='3'){
    header('location:accueil');
}
?>
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
                                <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] == 3){ ?>
                                <th>Options</th>
                                <?php } ?>
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
                                    <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] == 3){ ?>
                                        <td><span>
                                                <?php if($v['estChef'] < 2){ ?> <a href="index.php?p=nommerChef&id=<?=$v["id_s"]; ?>">Nommer Chef</a> | <?php }
                                                if ($v['estChef'] == 2){ ?><a href="index.php?p=retraitChef&id=<?=$v["id_s"]; ?>">Retirer grade</a> | <?php } ?>
                                                <a href="index.php?p=modifMembres&id=<?=$v["id_s"]; ?>">Modifier</a> | <a href="index.php?p=suppMembres&id=<?=$v["id_s"]; ?>">Supprimer</a></span></td>
                                    <?php } ?>
                                        </tr>
                                <?php $number++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
            foreach($req as $k=>$v){

                echo $v['nom']."<br>";
                echo $v['prenom']."<br>";
            }
        ?>
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
