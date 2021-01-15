<?php
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $passwd = sha1(htmlspecialchars($_POST['password']));
    $reponse = $bdd->prepare('select log.ID,log.Password from logins as log where log.Pseudo= ? ');
    $reponse->execute(array($pseudo));
    $logs = $reponse->fetch();
   
    if($logs){
        if (!$logs) {
            echo "Nom d'utilsateur ou mot de passe incorrect";
        }
        else{
            if ($passwd == $logs['Password']){
                session_start();
                $_SESSION['ID'] = $logs['ID'];
                $_SESSION['Pseudo'] = $pseudo;
                echo '<p>Bonjour, '.$pseudo. ', vous êtes désormais connecté.</p>';
            }
            else {
                echo "Nom d'utilsateur ou mot de passe incorrect";
            }
        }
    }
    else{
        echo "Nom d'utilsateur ou mot de passe incorrect";
    }
    
    