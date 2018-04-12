<div class="container formation">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h1><?= $title;?></h1>
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                <tr>
                    <th class="th_search">Nom</th>
                    <th class="th_search">Date du commentaire</th>
                    <th class="th_search">Description</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($req as $k=>$v){ ?>
                    <tr>
                        <td><?=$v['nom']." ".$v['prenom'];?></td>
                        <td><?=$v['date_com'];?></td>
                        <td><?=$v['contenu_com'];?></td>
                    </tr>


                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="form-group">
                <label for="contenu_com"><h3>Commentaire:</h3></label>
                <textarea class="form-control" name="contenu_com"></textarea>
            </div>
            <button type="submit"  name="submit" class="btn btn-success">Envoyer</button>
        </form>
    </div>
</div>