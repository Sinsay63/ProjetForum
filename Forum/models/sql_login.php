<?php

if (isset($_POST['pseudo'])){
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
  
    $reponse = $bdd->query("SELECT * FROM `logins` WHERE Pseudo='$username' and Password='".hash('sha256',$password)."'");
    $result=$reponse->fetch();
  
    if($result==true){
        $id=$result['ID'];
        $reponss = $bdd->query("SELECT * FROM `ban` WHERE ID_auteur ='$id'");
        $banni=$reponss->fetch();

        $bandef=$banni['Ban_Vie'];
        $tempban=$banni['Durée_Ban'];
        $raisban=$banni['Raison_Ban'];
        
        if($ban_Vie==1){
            header("Location: index.php?page=page_connexion&error=0&rais='$raisban'");
        }
        if(!empty($tempban)){
            date_default_timezone_set('Europe/Paris');
            $date = date('20y-m-d H:i');
            $durée= $date - $raisban;
            header("Location: index.php?page=page_connexion&error=6&tempban='$durée'");
        }
        else if ($ban==0){
            $_SESSION['pseudo'] = $username;
            $_SESSION['ID']=$result['ID'];
            $_SESSION['IsAdmin']=$result['IsAdmin'];
            $_SESSION['Avatar']=$result['Avatar_Path'];
            header("Location: index.php");
        }
    }
     else {
          header("Location: index.php?page=page_connexion&error=1");
        }
}
