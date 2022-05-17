<?php

if (!empty($_POST["search"])){
    ?><script>window.location.href = "?page=search&query=<?= $_POST["search"]; ?>";</script><?php
}

?>
<div class="search"><form method="POST"><label><span>Rechercher un salon</span><input type="text" name="search" placeholder="Tapez ici..."></label></form></div>
<style>
    div.search{
        padding: 20px;
        background: rgba(0,0,0,0.2);
        width: min-content;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        margin-bottom:20px;
    }
    div.search input{
        padding: 5px;
        border-radius: 5px;
        border:0;
    }
    .search span{
        padding-bottom:7px;
    }
    .search label{
        display: grid;
    }
</style>