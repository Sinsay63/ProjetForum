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

        $ban=$banni['Ban_Vie'];
        if($ban==1){
            header("Location: index.php?error=0");
        }
        else if ($ban==0){
            $_SESSION['pseudo'] = $username;
                $_SESSION['ID']=$result['ID'];
                $_SESSION['IsAdmin']=$result['IsAdmin'];
            header("Location: index.php");
        }
    }
     else {
          header("Location: index.php?error=1");
        }
}
