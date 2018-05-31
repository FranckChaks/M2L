<?php
//if (isset($_SESSION['lvl']) AND $_SESSION['lvl']=='3'){
//
//}
//if (isset($_SESSION['lvl']) AND $_SESSION['lvl']=='2'){
////    if((int)$_SESSION['id']!==($id)) {
////        foreach ($t as $a => $b) {
////            var_dump(in_array($id,$b[]));
////            die();
////            if (in_array($id, (int)$b['id_s'])){
////            }else{
////                header("location:accueil");
////            }
////        }
////    }
//}
//if (isset($_SESSION['lvl']) AND $_SESSION['lvl']=='1'){
//    if($id!==(int)$_SESSION['id']){
//        header("location:accueil");
//    }
//}
//if(isset($_SESSION['lvl']) AND $_SESSION['lvl']!=='1' AND $_SESSION['lvl']!=='2' AND $_SESSION['lvl']!=='3'){
//        header("location:accueil");
//}

    ?>
<div id="page-wrapper">
    <div id="page-inner">
        <a href="EspacePerso" class="previous"><button class="btn btn-primary retour">Retour</button></a>
        <div class="row">
            <div class="col-xs-10 col-sm-8 col-md-8 col-xs-offset-2">
                <div class="form-group add_user">
                    <div class="modif-title">
                        <h3>Modifier l'utilisateur</h3>
                        <hr>
                    </div>
                    <form method="post" class="form_modif">

                        <label>Nom:</label>
                        <input type="text" class="form form-control" name="nom" value="<?= $r["nom"]; ?>">
                        <label>Prénom:</label>
                        <input type="text" class="form form-control" name="prenom" value="<?= $r["prenom"]; ?>">
                        <label>Email:</label>
                        <input type="text" class="form form-control" name="email" value="<?= $r["email"]; ?>">
                        <label>Mot de passe : </label>
                        <input type="password" class="form form-control" name="mdp">
                        <label>Vérification du mot de passe : </label>
                        <input type="password" class="form form-control" name="mdp2">
                        <?php if(isset($_SESSION['lvl']) AND $_SESSION['lvl'] > 1 AND $r['estChef'] < 1 ){
                            
                                ?>
                                <label>Affilié à:</label>
                                <select name="chef" class="form-control">
                                    <?php  foreach($s as $k=>$v){ ?>
                                        <option value="<?php echo $v['id_s']; ?>" <?php if($r["id_c"]==$v['id_s']){ echo "selected"; } ?>><?php echo $v['nom']." ".$v['prenom']; ?></option> <?php } ?>
                                </select>
                            <?php } ?>
                        <hr>
                        <button type="submit" name="modif_infos_base" class="btn btn-success">Modifier</button>

                    </form>
                </div>
                <hr class="primary">
                <hr class="primary">

            </div>
        </div>
    </div>
</div>
