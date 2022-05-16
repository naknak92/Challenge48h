<?php
$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8','root','root');
if(isset($_POST['valider']))
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insereMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES(?,?)');
        $insereMessage->execute(array($pseudo,$message));

    }else{
        echo"Veuillez compléter tous les champs...";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Messagerie instantané</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo">
        <br><br>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" name="valider">
    </form>
    <section id="messages"></section>
    <script>
        setInterval('load_messages()', 500);
        function load_messages(){
            $('#messages').load('loadMessages.php');
        }
    </script>
    
</body>
</html>