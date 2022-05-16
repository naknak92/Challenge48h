<?php

$sha = function($value) {
    return sha1($value+1);
};

if(!empty($_COOKIE["idlogin"])){
    $user = $users[array_search($_COOKIE["idlogin"], array_map($sha, array_keys($users)))];
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                <?php if(empty($user)){ ?>
                    <img src="static/imgs/logo.png" style="height:50px;">
                <?php } ?>
                <?php if(!empty($user)){ ?>
                <div class="chip" style="margin-top: 0 !important;position: initial !important;">
                    <img src="static/imgs/logo.png" style="height:50px;">
                    <img class="profile_img" src="<?= 'static/imgs/'.((!empty($user["img"])) ? $user["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                    <span><?= $user["username"]; ?></span>
                </div>
                <?php } ?>
            </div>
            <div class="menu-items">
                <li><?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login">Connexion</a>' : '<a href="?page=logout">Deconnexion</a>'; ?></li>
            </div>
        </div>
        </div>
    </nav>


    <div class="grid">
    <?php foreach($events as $date){ ?>
    <?php foreach($date as $event){ ?>
        <div class="card">
            <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
            <div class="container_">
                <div class="chip">
                    <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]-1]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                    <span><?= $users[$event["idcreateur"]-1]["username"]; ?></span>
                </div>
                <p>
                    <?= $event["nomsalon"] ?>
                    <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?></small>
                    <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour participer</button></a>' : '<a href="?page=reservation"><button>Participer</button></a>'; ?>
                </p>
            </div>
        </div>
    <?php } ?>
    <?php } ?>
    </div>
</body>
</html>