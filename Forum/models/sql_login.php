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

        $ban=$banni['Ban'];
        if($ban==1){
            header("Location: index.php?page=page_connexion&error=0");
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
