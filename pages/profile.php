<link rel="stylesheet" href="css/Profil.css">

<?php

	$currUser = $user[(!empty($_GET["id"])) ? $_GET["id"] : $user];

?>

<div class="body">
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
</div>