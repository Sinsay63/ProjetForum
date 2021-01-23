<?php
session_start();
if (isset($_REQUEST['email'], $_REQUEST['nom'], $_REQUEST['prenom'],$_REQUEST['âge'],$_REQUEST['mdp'],$_REQUEST['Pseudo'],$_REQUEST['mdp_conf'])){
    
    $username = stripslashes($_REQUEST['Pseudo']);
    $email = stripslashes($_REQUEST['email']);
    $password = stripslashes($_REQUEST['mdp']);
    $passwd_conf = stripslashes($_REQUEST['mdp_conf']);
    $nom=stripslashes($_REQUEST['nom']);
    $prénom=stripslashes($_REQUEST['prenom']);
    $age=stripslashes($_REQUEST['âge']);
    
    
    $reponses = $bdd->query("SELECT Pseudo,Email FROM `logins` WHERE Pseudo='$username' or Email ='$email'");
    $match=$reponses->fetch();
    $verif=0;
    if (!preg_match ( " /^.+@.+.[a-zA-Z]{2,}$/ " , $email )){
        $verif=1;
        header("Location: view/pageconnex.php?sign_error=1");
    }
    if ($match==true){
        $verif=1;
        header("Location: view/pageconnex.php?sign_error=2");
    }
    if ($password != $passwd_conf){
        $verif=1;
        header("Location: view/pageconnex.php?sign_error=3");
    }
    
    
    else if($verif ==0){
    $reponse = $bdd->prepare('INSERT INTO logins(Email,Password,Prénom,Nom,Pseudo,Age) VALUES (?,?,?,?,?,?)');
    $reponse->execute(array($email,hash('sha256',$password),$prénom,$nom,$username,$age));
      
    if($reponse){ ?>
       <div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='view/pageconnex.php'>connecter</a></p>
       </div>
       <?php
       
    }
    }
}
