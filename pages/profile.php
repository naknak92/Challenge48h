<link rel="stylesheet" href="css/Profil.css">

<?php $currUser = $users[(!empty($_GET["id"])) ? $_GET["id"] : $user["iduser"]]; ?>

<div class="body container">
	<div class="card-container">
		<img class="round" src="<?= 'static/imgs/'.((!empty($currUser["img"])) ? $currUser["img"] : 'default.jpg') ?>" alt="user" />
		<h3><?= $currUser["username"]; ?></h3>
		<div class="buttons">
			<?php if($currUser != $user){ ?>
			<button class="primary">
				Message
			</button>
			<?php }else{ ?>
			<button class="primary ghost">
				Edit
			</button>
			<?php } ?>
		</div>
		<div class="skills">
			<h6>Information</h6>
			<ul>
				<li>Username : <?= $currUser["username"] ?></li>
				<li>Firstname : <?= $currUser["prenom"] ?></li>
				<li>Name : <?= $currUser["nom"] ?></li>
				<li>Email : <?= $currUser["mail"] ?></li>
			
			</ul>
		</div>
	</div>
	<div class="right">
		<h1 style="margin: 30px;margin-bottom: 0;">Salons récents</h1>
		<div class="grid" style="grid-template-columns:repeat(2,1fr);padding-top:0">
			<?php $id = (!empty($_GET["id"])) ? $_GET["id"] : $user["iduser"]; $i = 0; foreach($events as $date){ ?>
			<?php foreach($date as $event){ ?>
			<?php if(strpos(strtolower($users[$event["idcreateur"]]["iduser"]), strtolower($id)) !== false){ $i = 1; ?>
				<div class="card">
					<img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
					<div class="container_">
						<div class="chip" onclick="this.querySelector('a').click();"><a href="?page=profile&id=<?= $users[$event["idcreateur"]]["iduser"]; ?>"></a>
							<img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[$event["idcreateur"]]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
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
					echo "Aucun salon récent trouvé";
				}
			?>
		</div>
	</div>
</div>