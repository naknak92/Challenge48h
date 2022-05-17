<?php

print_r($events);

$query = "SELECT * FROM `eventsclients` WHERE idsalon = ".$_GET['idevent']." AND idutilisateur = '".$user['iduser']."';";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $deja = $row;
}
if(!isset($deja)){
    $events_clients = "INSERT INTO eventsclients (idsalon,idutilisateur) VALUES ('".$_GET['idevent']."','".$user['iduser']."')";
    if($mysqli->query($events_clients))
    {
        echo "<script>
            alert('Vous pouvez participer a cet évènement maintenant');
        </script>";        
    }
    $query = "SELECT * FROM `events` WHERE idevent = ".$_GET['idevent'].";";
    $result = $mysqli->query($query);
    while($row = $result->fetch_assoc()){
        $event = $row;
    }
}
?><script>window.location.href = "?page=event&nomsalon=<?= $event['nomsalon'] ?>&idevent=<?= $event['idevent'] ?>";</script><?php