<?php

    include "fetchFromDB.php";

    function squadHash($str){
        return sha1(md5($str));
    }

    $unloggedPages = ["home.php", "login.php", "register.php"];
    $loggedPages = ["home.php"]+array_diff(scandir("pages"), $unloggedPages);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

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

</body>
</html>