<?php

//Connexion bdd
$mysqli = new mysqli('localhost', 'root', '', 'SQUAD');
$mysqli->set_charset('utf8mb4');

//fetch users
$query = "SELECT * FROM `users`";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $users[$row["iduser"]] = $row;
}

//fetch events
$query = "SELECT * FROM `events`";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    if($row["termine"] == 0){
        $date = date_create($row["datedeb"].$row["deb"]);
        $events[date_format($date, 'U')][$row["idevent"]] = $row;
    }
}


?>