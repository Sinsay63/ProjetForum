<?php
$id=$_SESSION['ID'];
if (isset($_POST['new_username'])){
    
    $new_username = htmlspecialchars($_POST['new_username']);
    $rep=$bdd->prepare('Select Pseudo from logins');
    $rep->execute(array());
    $pseudo=$rep->fetch();
    foreach ($pseudo as $value) {
        if ($value==$new_username){
            
        }
        else{
            $reponse = $bdd->prepare("UPDATE logins SET Pseudo= ? WHERE ID= ?");
            $reponse->execute(array($new_username,$id));
    
    if($reponse){
        $_SESSION['Pseudo']=$new_username;
        header('location: index.php');
    }
        }
    }
    
    
}
    if (isset($_POST['old_password'], $_POST['new_password'],$_POST['new_password2'])){
        $old_passwd = hash('sha256',htmlspecialchars($_POST['old_password']));
        $new_passwd = hash('sha256',htmlspecialchars($_POST['new_password']));
        $new_passwd2 = hash('sha256',htmlspecialchars($_POST['new_password2']));
    
        $reponse = $bdd->prepare("SELECT Password FROM `logins` WHERE ID= ?");
        $reponse->execute(array($id));
        $result=$reponse->fetchAll();
        
        foreach ($result as $value) {
            $passwd=$value['Password'];
        }
        $error=0;
    if ($old_passwd != $passwd){
        $error=1;
        header("Location: index.php?page=profil&chg_profil=1");
    }
     if ($new_passwd != $new_passwd2){
         $error=1;
         header("Location: index.php?page=profil&chg_profil=2");
     }
     
     if($new_passwd== $old_passwd){
         $error=1;
         header("Location: index.php?page=profil&chg_profil=3");
     }
     if($error==0){
        $repons = $bdd->prepare("UPDATE logins SET Password = ? WHERE ID= ? ");
        $repons->execute(array($new_passwd,$id));
        if($repons){
            session_destroy();
            //Lien à remplacer lorsqu'on aura une page de redirection vers le login
            header('location: index.php?page=page_connexion');
        }
     }
    }
    
    if (isset($_POST['new_email'])){
        $erreur=0;
        $new_email=htmlspecialchars($_POST['new_email']);
        if (!preg_match ( " /^.+@.+.[a-zA-Z]{2,}$/ " , $new_email )){
            $erreur=1;
            header("Location: index.php?page=profil&chg_profil=4");
        }
        else if ($erreur==0){
            $repons = $bdd->prepare("UPDATE logins SET Email = ? WHERE ID= ? ");
            $repons->execute(array($new_email,$id));
            if($repons){
                session_destroy();
                //Lien à remplacer lorsqu'on aura une page de redirection vers le login
                header('location: index.php?page=page_connexion');
            }
        }
}