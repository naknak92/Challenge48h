<?php

?>

<?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login">Connexion</a>' : '<a href="?page=logout">Deconnexion</a>'; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
            <h1>HOME</h1>
            </div>
            <div class="menu-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">Mon compte</a></li>
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Inscription</a></li>
            </div>
        </div>
        </div>
    </nav>


    <div class="grid">
    <?php foreach($events as $event){ ?>
        <div class="card">
            <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
            <div class="container_">
                <div class="chip">
                    <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]-1]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                    <span><?= $users[$event["idcreateur"]-1]["username"]; ?></span>
                </div>
                <p>
                    <?= $event["nomsalon"] ?>
                    <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour réserver</button></a>' : '<a href="?page=reservation"><button>Réserver</button></a>'; ?>
                </p>
            </div>
        </div>
    <?php } ?>
    </div>
</body>
</html>