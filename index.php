<?php

    include "fetchFromDB.php";

    function squadHash($str){
        return sha1(md5($str));
    }

    $sha = function($value) {
        return sha1($value);
    };    

    $unloggedPages = ["home.php", "search.php", "login.php", "register.php", "authevent.php"];
    $loggedPages = ["home.php", "search.php"]+array_diff(scandir("pages"), $unloggedPages);

    if(!empty($_COOKIE["idlogin"])){
        $user = $users[array_search($_COOKIE["idlogin"], array_map($sha, array_column($users, "iduser")))];
        //echo "<pre>", $_COOKIE["idlogin"], print_r(array_map($sha, array_column($users, "iduser"))), print_r($users), "</pre>";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<?php

    include 'composants/nav.php';

    if(!empty($_COOKIE["idlogin"])){
        if(empty($_COOKIE["idadmin"])){
            $loggedPages = $loggedPages-["admin.php"];
            $unloggedPages = $unloggedPages-["admin.php"];
        }
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

</body>
</html>