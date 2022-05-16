<?php

?>

<?= (empty($_COOKIE["idlogin"])) ? '<a href="?page=login">Connexion</a>' : '<a href="?page=logout">Deconnexion</a>'; ?>

<?php

foreach($events as $event){ ?>
    <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="">
<?php }

?>