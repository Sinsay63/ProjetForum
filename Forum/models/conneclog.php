<?php
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $passwd = sha1(htmlspecialchars($_POST['password']));
    $reponse = $bdd->prepare('select log.ID,log.Password from logins as log where log.Pseudo= ? ');
    $reponse->execute(array($pseudo));
    $logs = $reponse->fetch();
    
        if (!$logs) {
            echo "Nom d'utilsateur ou mot de passe incorrect";
        }
        else{
            if ($passwd == $logs['Password']){
                $_SESSION['ID'] = $logs['ID'];
                $_SESSION['Pseudo'] = $pseudo;
                
                
            }
            else {
                echo "Nom d'utilsateur ou mot de passe incorrect";
            }
        }
        
    
    
    