<?php

if (isset($_POST['pseudo'])){
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
  
    $reponse = $bdd->prepare("SELECT * FROM `logins` WHERE Pseudo= ? and Password= ?");
    $reponss->execute(array($username,hash('sha256',$password)));
    $result=$reponse->fetch();
  
    if($result==true){
        $id=$result['ID'];
        $reponss = $bdd->prepare("SELECT * FROM `ban` WHERE ID_auteur =?");
        $reponss->execute(array($id));
        $banni=$reponss->fetchAll();

        foreach ($banni as $ban) {
            $bandef=$ban['Ban_Vie'];
            $tempban=$ban['Durée_Ban'];
            $raisban=$ban['Raison_Ban']; 
        }
        
        if($bandef==1){
            header("Location: index.php?page=page_connexion&error=0&rais='$raisban'");
        }
        
        if(!empty($tempban)){
            date_default_timezone_set('Europe/Paris');
            $date = date('20y-m-d H:i:s',$tempban);
            
            header("Location: index.php?page=page_connexion&error=6&tempban='$date'");
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
