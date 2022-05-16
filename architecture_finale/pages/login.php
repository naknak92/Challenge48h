<?php

if(!empty($_POST["login"])){
    $query = "SELECT * FROM `users` WHERE (`username` = '".$_POST["login"][0]."' OR `mail` = '".$_POST["login"][0]."') AND `password` = '".squadHash($_POST["login"][1])."';";
    $result = $mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $foundUser = $row;
    }
    if (!empty($foundUser)){
        setcookie("idlogin", sha1($foundUser["iduser"]), time()+3600*24*365*2);
        ?><script>window.location.href = "?page=home";</script><?php
    }
}

?>

<form method="post">
    <input type="text" name="login[]">
    <input type="password" name="login[]">
    <input type="submit">
</form>