<?php      
    
    $requete = "INSERT INTO users (nom ,prenom,username,mail,password) VALUES
                        (:nom ,:prenom,:username,:mail,:password)";
            
    #Faire un select sur la table personne
    $select='SELECT * from users';

    #Exécution de la requete retournant toutes les personnes de la base !
    $checkemail = $mysqli->query($select);

    #Exécution de la requete retournant toutes les personnes de la base !
    $checkusername = $mysqli->query($select);                    
                        
  //  $stmt=$mysqli->prepare($requete);
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
            while($check1 = $checkusername->fetch_assoc())
            {
                if($username==$check1['username']) 
                {
                $verifusername=true;
                break;     
                                            
                }
                                                
            }

            while($check2 = $checkemail->fetch_assoc())
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
              alert('Email et username  déjà utilisés, retentez svp !');
             </script>";
            }
            else if($verifusername==true && $verifemail==false)
            {
              echo "<script>
                alert('Username déjà utilisé, retenter avec un autre !');
             </script>";

            }
                        
            else if($verifusername==false && $verifemail==true )
            {
              echo "<script>
              alert('Email déjà utilisé, retenter avec un autre !');
             </script>";

            }
                                            
            else
            {
              $pwd = squadHash($mdp);
              $sql = "INSERT INTO users ".
              "(nom ,prenom,username,mail,password) "."VALUES ".
              "('$nom','$prenom','$username','$email','$pwd')";
                
                if($mysqli->query($sql))
                {
                  echo "<script>
                      alert('Inscription réussi $prenom');
                  </script>";
                }
                                                    
                    else
                    {
                      echo "<script>
                         alert('Failed !');
                     </script>";
                    }

            }
                        
                    
                                        
        }
        else 
        {
          echo "<script>
          alert('Remplissez tous les champs !');
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
        <a href="?page=home" style="text-decoration: none; color : blue">
            Go back to home
        </a>
    </h2>
    <form method="post" >
    
      <div class="user-box">
        <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){echo htmlentities($_POST['prenom']);}?>" required="">
        <label>Firstname</label>
      </div>
      <div class="user-box">
        <input type="text" name="nom" value="<?php if(isset($_POST['nom'])){echo htmlentities($_POST['nom']);}?>" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username']);}?>" required="">
        <label>Username</label>
      </div><div class="user-box">
        <input type="email" name="mail" value="<?php if(isset($_POST['mail'])){echo htmlentities($_POST['mail']);}?>" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
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