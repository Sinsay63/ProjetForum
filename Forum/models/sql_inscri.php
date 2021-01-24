<?php
if (isset($_POST['email'], $_POST['nom'], $_POST['prenom'],$_POST['âge'],$_POST['mdp'],$_POST['mdp_conf'],$_POST['Pseudo'])){
    
    $username = htmlspecialchars($_POST['Pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mdp']);
    $passwd_conf = htmlspecialchars($_POST['mdp_conf']);
    $nom=htmlspecialchars($_POST['nom']);
    $prénom=htmlspecialchars($_POST['prenom']);
    $age=htmlspecialchars($_POST['âge']);
    
    
    $reponses = $bdd->query("SELECT Pseudo,Email FROM `logins` WHERE Pseudo='$username' or Email ='$email'");
    $match=$reponses->fetch();
    $verif=0;
    if (!preg_match ( " /^.+@.+.[a-zA-Z]{2,}$/ " , $email )){
        header("Location: index.php?&error=2");
        $verif=1;
    }
    if ($match==true){
        header("Location: index.php?error=3");
        $verif=1;
    }
    if ($password != $passwd_conf){
        header("Location: index.php?error=4");
        $verif=1;
    }
    
    
    else if($verif ==0){
    $reponse = $bdd->prepare('INSERT INTO logins(Email,Password,Prénom,Nom,Pseudo,Age) VALUES (?,?,?,?,?,?)');
    $reponse->execute(array($email,hash('sha256',$password),$prénom,$nom,$username,$age));
      
    if($reponse){ ?>
       <div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='index.php?page=page_connexion'>connecter</a></p>
       </div>
       <?php
       
    }
    }
}
