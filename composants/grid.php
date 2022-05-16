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