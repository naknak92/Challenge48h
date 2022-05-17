<div class="body container">
    <?php include 'composants/searchProcess.php'; ?>
    <?php if (!empty($_GET["query"])){ ?>

        <h1>Par titre(s)</h1>
        <div class="grid">
        <?php $i = 0; foreach($events as $date){ ?>
        <?php foreach($date as $event){ ?>
        <?php if(strpos(strtolower($event["nomsalon"]), strtolower($_GET["query"])) !== false){ $i = 1; ?>
            <div class="card">
                <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
                <div class="container_">
                    <div class="chip" onclick="this.querySelector('a').click();"><a href="?page=profile&id=<?= $users[$event["idcreateur"]]["iduser"]; ?>"></a>
                        <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]-1]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                        <span><?= $users[$event["idcreateur"]]["username"]; ?></span>
                    </div>
                    <p>
                        <?= $event["nomsalon"] ?>
                        <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?> - Pas encore terminé</small>
                        <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour participer</button></a>' : '<a href="?page=reservation"><button>Participer</button></a>'; ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php
            if($i == 0){
                echo "Rien trouvé";
            }
        ?>
        </div>

        <h1>Par auteurs</h1>
        <div class="grid">
        <?php $i = 0; foreach($events as $date){ ?>
        <?php foreach($date as $event){ ?>
        <?php if(strpos(strtolower($users[$event["idcreateur"]]["username"]), strtolower($_GET["query"])) !== false){ $i = 1; ?>
            <div class="card">
                <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
                <div class="container_">
                    <div class="chip" onclick="this.querySelector('a').click();"><a href="?page=profile&id=<?= $users[$event["idcreateur"]]["iduser"]; ?>"></a>
                        <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]-1]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                        <span><?= $users[$event["idcreateur"]]["username"]; ?></span>
                    </div>
                    <p>
                        <?= $event["nomsalon"] ?>
                        <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?> - Pas encore terminé</small>
                        <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour participer</button></a>' : '<a href="?page=reservation"><button>Participer</button></a>'; ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php
            if($i == 0){
                echo "Rien trouvé";
            }
        ?>
        </div>

        <h1>Par lieu(x)</h1>
        <div class="grid">
        <?php $i = 0; foreach($events as $date){ ?>
        <?php foreach($date as $event){ ?>
        <?php if(strpos(strtolower($event["lieu"]), strtolower($_GET["query"])) !== false){ $i = 1; ?>
            <div class="card">
                <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
                <div class="container_">
                    <div class="chip" onclick="this.querySelector('a').click();"><a href="?page=profile&id=<?= $users[$event["idcreateur"]]["iduser"]; ?>"></a>
                        <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]-1]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                        <span><?= $users[$event["idcreateur"]]["username"]; ?></span>
                    </div>
                    <p>
                        <?= $event["nomsalon"] ?>
                        <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?> - Pas encore terminé</small>
                        <?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login"><button>Connexion pour participer</button></a>' : '<a href="?page=reservation"><button>Participer</button></a>'; ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php
            if($i == 0){
                echo "Rien trouvé";
            }
        ?>
        </div>

    <?php } ?>
</div>