<?php

    include "fetchFromDB.php";

    function squadHash($str){
        return sha1(md5($str));
    }

    $unloggedPages = ["home.php", "login.php", "register.php"];
    $loggedPages = ["home.php"]+array_diff(scandir("pages"), $unloggedPages);
    
    if(!empty($_COOKIE["idlogin"])){
        if (empty($_GET["page"]) or !in_array($_GET["page"].".php", $loggedPages)){
            ?><script>window.location.href = "?page=home";</script><?php
        }else{
            include "pages/".$_GET["page"].".php";
        }
    }else{
        if (empty($_GET["page"]) or !in_array($_GET["page"].".php", $unloggedPages)){
            ?><script>window.location.href = "?page=home";</script><?php
        }else{
            include "pages/".$_GET["page"].".php";
        }
    }

?>

