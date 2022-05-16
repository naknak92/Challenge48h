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

<link rel="stylesheet" href="css/Login.css">
<link
  rel="icon"
  href="static/imgs/logo.png"
  sizes="16x16"
/>

<div class="login-box">
    <h2>Login or
        <a href="?page=home">
            Go back to home
        </a>
    </h2>
    <form method="POST">
      <div class="user-box">
        <input type="text" name="login[]" required="" autocomplete="off">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="login[]" required="" autocomplete="off">
        <label>Password</label>
      </div>
      <a href="#" onclick="document.getElementById('submit').click()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        sign in
      </a>
      <input type="submit" id="submit" style="display:none">
      <a href="?page=register">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        sign up
      </a>
      
    </form>
  </div>