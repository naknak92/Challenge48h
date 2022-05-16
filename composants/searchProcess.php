<?php

if (!empty($_POST["search"])){
    ?><script>window.location.href = "?page=search&query=<?= $_POST["search"]; ?>";</script><?php
}

?>
<div class="search"><form method="POST"><input type="text" name="search"></form></div>