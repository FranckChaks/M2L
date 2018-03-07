<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand page-scroll" href=""> <img src="../img/text4136.png" alt="" title="Formulaire" /> </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-center">
                <li> <a class="page-scroll" href="">Espace de connexion</a> </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header class="container">
    <section id="connexion" class="no-padding">
        <div class="header-container"></div>
        <div class="header-content">
            <div class="header-content-inner">
                <hr>
                <div class="background-log">
                    <h2>Connexion<br/></h2>
                    <br>
                    <form action="#" method="post">
                        <div class="input-group width-log">
                       <span class="input-group-addon">
                       <i class="glyphicon glyphicon-user"></i>
                       </span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="exemple1@email.fr"> </div>
                        <br>
                        <div class="input-group width-log">
                       <span class="input-group-addon">
                       <i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="mdp" placeholder="Mot de passe"> </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="remember-me">Se souvenir de moi</label>
                        </div>
                        <?php
                        if(isset($_POST['submit'])){
                            if($message != "") ?>
                                <div class="error"><?=$message;?></div>
                            <?php
                        }
                        ?>
                        <div class="wrap">
                            <button class="button" type="submit" name="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</header>