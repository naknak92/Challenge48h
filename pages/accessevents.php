<?php

$events_clients = "INSERT INTO eventsclients "."(idsalon,idutilisateur) "."VALUES ".
                    "('$_GET['idsalon']','$user['id']')";
if($mysqli->query($events_clients))
{
    echo "<script>
        alert('Vous pouvez participer a cet évènement maintenant $prenom');
    </script>";
    ?><script>window.location.href = "?page=event&nomsalon="<?= $events[$_GET['idsalon']]['nomsalon'] ?>"&idevent="<?= $events[$_GET['idsalon']]['idevent'] ?>";</script><?php        
}