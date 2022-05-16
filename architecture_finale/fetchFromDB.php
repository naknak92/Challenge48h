<?php

//Connexion bdd
$mysqli = new mysqli('localhost', 'root', '', 'SQUAD');
$mysqli->set_charset('utf8mb4');

//fetch admin
$query = "SELECT * FROM `admin`";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $admins[] = $row;
}

//fetch users
$query = "SELECT * FROM `users`";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $users[] = $row;
}

//fetch events
$query = "SELECT * FROM `events`";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $events[] = $row;
}

?>