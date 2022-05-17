<?php

include 'composants/nav.php';

?>

<div class="body container">
    <?php include 'composants/searchProcess.php'; ?>
    <?php if(empty($user)){ ?>
    <a href="?page=login">Connexion</a>
    <a href="?page=register">Inscription</a>
    <?php } ?>
    <h1>Récents</h1>
    <?php include 'composants/grid.php'; ?>
</div>