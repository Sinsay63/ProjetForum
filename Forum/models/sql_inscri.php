<?php
session_start();
if (isset($_REQUEST['email'], $_REQUEST['nom'], $_REQUEST['prenom'],$_REQUEST['âge'],$_REQUEST['mdp'],$_REQUEST['Pseudo'])){
    
    $username = stripslashes($_REQUEST['Pseudo']);
    $email = stripslashes($_REQUEST['email']);
    $password = stripslashes($_REQUEST['mdp']);
    $nom=stripslashes($_REQUEST['nom']);
    $prénom=stripslashes($_REQUEST['prenom']);
    $age=stripslashes($_REQUEST['âge']);
    
    
    $reponses = $bdd->query("SELECT Pseudo,Email FROM `logins` WHERE Pseudo='$username' or Email ='$email'");
    $match=$reponses->fetch();
    $oui=0;
    if ($match==true){
        $oui=1;
        $_GET['erreur']=$oui;
    }
    if (!preg_match ( " /^.+@.+.[a-zA-Z]{2,}$/ " , $email )){
        $oui=2;
        $_GET['erreur']=$oui;
    }
    
    else if($oui ==0){
    $reponse = $bdd->prepare('INSERT INTO logins(Email,Password,Prénom,Nom,Pseudo,Age) VALUES (?,?,?,?,?,?)');
    $reponse->execute(array($email,hash('sha256',$password),$prénom,$nom,$username,$age));
      
    if($reponse){?>
       <div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='view/pageconnex.php'>connecter</a></p>
       </div>
       <?php
       
    }
    }
}
