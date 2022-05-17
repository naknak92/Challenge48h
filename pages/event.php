<div class="body">
    <div class="grid">
    <?php
        $nomsalon = $_GET['nomsalon'];
        $idevent = $_GET['idevent'];
    
        $requete = "select * from events where idevent = '$idevent'";	
        $urls = $mysqli->query($requete);
        while($event = $urls->fetch_assoc()){
            $id = $event["idcreateur"];
            $idevent= $event["idevent"];
            $requete1 = "select * from users where iduser = '$id'";
            $requete2 = "SELECT count(*) FROM eventsclients WHERE idsalon = '$idevent';";
            $urls1 = $mysqli->query($requete1);
            $nRows = $mysqli->query($requete2)->fetch_row(); 
            while($url1 = $urls1->fetch_assoc()){
        ?>
        <div class="card">
            <img src="<?= 'static/imgs/'.((!empty($event["img"])) ? $event["img"] : 'default.jpg') ?>" alt="" style="width:100%">
            <div class="container_">
                <div class="chip">
                    <img class="profile_img" src="<?= 'static/imgs/'.((!empty($users[sha1($event["idcreateur"])]["img"])) ? $event["img"] : 'default.jpg') ?>" alt="Person" width="96" height="96">
                    <span><?= $users[sha1($event["idcreateur"])]["username"]; ?></span>
                </div>
                <p>
                    <?= $event["nomsalon"] ?>
                    <br><small>Début : <?php $date = date_create($event["datedeb"].$event["deb"]); echo date_format($date, 'd/m H:i'); ?> - Pas encore terminé</small>
                    <br>
                    <br><small>Nombre de participants : <?php echo $nRows['0']; ?></small>
                    
                    </p>
            </div>
        </div>
            
        
            
        <?php } 
            }
        ?>
        
        <br/>
        <h1>Liste des participants </h1> 
        <?php
            $requete3 = "SELECT * FROM eventsclients WHERE idsalon = '$idevent'";
            $urlevents = $mysqli->query($requete3);
            while($url2 = $urlevents->fetch_assoc())
            {
                $iduser = $url2['idutilisateur'];
                $requete4 = "select * from users where iduser = '$iduser'";
                $listUsers = $mysqli->query($requete4);

                while( $listUser = $listUsers->fetch_assoc())
                {
        ?>
                    <h5>Prénom et nom : <?= $listUser["prenom"]?> -  <?= $listUser["nom"]?> </h5>
                    
        <?php   }
            }
        
        ?>  

    </div>
</div>