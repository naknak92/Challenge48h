<?php

include 'composants/nav.php';

?>

<div class="body">
    <?php include 'composants/searchProcess.php'; ?>
    <?php if(empty($user)){ ?>
    <a href="?page=login">Connexion</a>
    <a href="?page=register">Inscription</a>
    <?php } ?>
    <?php include 'composants/grid.php'; ?>
</div>