<div class="grid">
<?php foreach($events as $date){ ?>
<?php foreach($date as $event){ ?>
    <div class="card">
        <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
        <div class="container_">
            <div class="chip" onclick="this.querySelector('a').click();"><a href="?page=profile&id=<?= $users[$event["idcreateur"]]["iduser"]; ?>"></a>
                <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                <span><?= $users[$event["idcreateur"]]["username"]; ?></span>
            </div>
            <p>
                <?= $event["nomsalon"]; ?>
                <br><small>Lieu : <?= $event["lieu"]; ?></small>
                <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?> - Pas encore terminé</small>
                <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour participer</button></a>' : '<a href="?page=reservation"><button>Participer</button></a>'; ?>
            </p>
        </div>
    </div>
<?php } ?>
<?php } ?>
</div>