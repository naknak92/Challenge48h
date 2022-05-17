<nav>
    <div class="navbar">
    <div class="container nav-container">
        <input class="checkbox" type="checkbox" name="" id="" />
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <div class="logo">
        <?php if(empty($user)){ ?>
            <a href="?page=home">
                <img src="static/imgs/logo.png" style="height:50px;">
            </a>
        <?php } ?>
        <?php if(!empty($user)){ ?>
            <div class="chip" style="margin-top: 0 !important;position: initial !important;margin-left:10px">
                <img class="profile_img" src="<?= 'static/imgs/'.((!empty($user["img"])) ? $user["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                <span><?= $user["username"]; ?></span>
                <a href="?page=home"><i class="fa fa-home"></i></a>
                <a href="?page=profile"><i class="fa fa-cogs"></i></a>
                <a href="?page=logout"><i class="fa fa-sign-out-alt"></i></a>
            </div>
            <?php } ?>
        </div>
        <div class="menu-items">
            <li><a href="?page=home">Accueil</a></li>
            <li><a href="?page=search">Recherche</a></li>
            <li><?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login">Connexion</a>' : '<a href="?page=logout">Deconnexion</a>'; ?></li>
        </div>
    </div>
    </div>
</nav>