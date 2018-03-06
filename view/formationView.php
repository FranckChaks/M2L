
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
     <!--
    <div class="row rowFormation">
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
    </div>
    <div class="row rowFormation">
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
    </div>
    <div class="row rowFormation">
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
        <div class="col-xs-4 col-md-3 displayFormation">
            <img  height="230" width="290" src="css/tennis.jpg">
            <div class="title_form"> TITRE FORMATION </div>
        </div>
    </div>
</div>
-->


<!------------------------------------------------>






    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Athlétisme</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <div class="sport col-xs-12 col-md-12">
                                            <div class="col-xs-4 col-md-4 sport_left">
                                                <img height="200" width="200" src="css/tennis.jpg">
                                            </div>
                                            <div class="col-xs-8 col-md-8 sport_right">
                                                <h1>Nom Sport</h1>
                                                Contenu<br>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque, sapiente tempore, cum nemo, adipisci tempora provident culpa in pariatur illum officiis? Dignissimos sit rerum omnis aut non cum explicabo!<br><br>
                                                Prestataire:         Date début:         Durée de formation     Crédit:
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img  height="150" width="150"src="css/tennis.jpg"><a href="">News</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img  height="150" width="150"src="css/tennis.jpg"><a href="">Newsletters</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img  height="150" width="150"src="css/tennis.jpg"><a href="">Comments</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Sport Individuel</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Sport Collectif</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Handisport</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
