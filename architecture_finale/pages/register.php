<?php
                                
    $requete = "INSERT INTO users (nom ,prenom,username,mail,password) VALUES
                        (:nom ,:prenom,:username,:mail,:password)";
            
    #Faire un select sur la table personne
    $select='SELECT * from users';

    #Exécution de la requete retournant toutes les personnes de la base !
    $checkemail = $mysqli->query($select);

    #Exécution de la requete retournant toutes les personnes de la base !
    $checkusername = $mysqli->query($select);                    
                        
    $stmt=$mysqli->prepare($requete);
    $verifusername=false;
    $verifemail=false;
                        
    if(isset($_POST['mail']) and isset($_POST['password']) and isset($_POST['nom']) and  isset($_POST['prenom'])
                and isset($_POST['username'])) 
    {
                
        $email = $_POST['mail'];
        $mdp = $_POST['password'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $username = $_POST['username'];
        if(!empty($email) and !empty($mdp) and !empty($nom) and !empty($prenom) and !empty($username) )
        {
            while($check1 = $checkusername->fetch())
            {
                if($username==$check1['username']) 
                {
                $verifusername=true;
                break;     
                                            
                }
                                                
            }

            while($check2 = $checkemail->fetch())
            {
                if($email == $check2['mail'])
                {
                    $verifemail=true;
                    break;     
                                                        
                }
                                                    
                                                
            }
                                                
            if($verifusername==true && $verifemail==true )
            {
                echo "<script>
                        $('.err_username_email').slideDown('slow');
                    </script>";
            }

            else if($verifusername==true && $verifemail==false)
            {
                echo "<script>
                        $('.err_username).slideDown('slow');
                    </script>";

            }
                        
            else if($verifusername==false && $verifemail==true )
            {
                echo "<script>
                        $('.err_email').slideDown('slow');
                    </script>";

            }
                                            
            else
            {
                $stmt->bindParam(':mail', $email);
                $stmt->bindParam(':password', $mdp);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':username', $username);
                
                if($stmt->execute())
                {
                    echo "<script>
                            $('.yes').slideDown('slow');
                            window.location.href='home.php';
                        </script>";
                    }
                                                    
                    else
                    {
                        echo "<script>
                                $('.err_execute').slideDown('slow');
                                </script>";
                    }

            }
                        
                    
                                        
        }
        else 
        {
                echo "<script>
                        $('.err_empty').slideDown('slow');
                </script>";
        }
    }     
                
?>

<link rel="stylesheet" href="css/Login.css">
<link
  rel="icon"
  href="/assets/img/logo.png"
  sizes="16x16"
/>

<div class="login-box">
    <h2>Sign Up or
        <a href="?page=home">
            Go back to home
        </a>
    </h2>
    <form>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Firstname</label>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="" required="">
        <label>Username</label>
      </div><div class="user-box">
        <input type="password" name="" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Password</label>
      </div>
      <a href="#" onclick="document.getElementById('submit').click()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Sign Up
      </a>
      <input type="submit" id="submit" style="display:none">
      <a href="?page=login">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        sign in
      </a>
    </form>
  </div>