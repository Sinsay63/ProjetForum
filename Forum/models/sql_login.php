<?php

if (isset($_POST['pseudo'])){
  $username = htmlspecialchars($_POST['pseudo']);
  $password = htmlspecialchars($_POST['password']);
  
  $reponse = $bdd->query("SELECT * FROM `logins` WHERE Pseudo='$username' and Password='".hash('sha256',$password)."'");
  $result=$reponse->fetch();
  if($result==true){
      $_SESSION['pseudo'] = $username;
      foreach ($result as $value) {
        $_SESSION['ID']=$result['ID'];
        $_SESSION['IsAdmin']=$result['IsAdmin'];
      }
      header("Location: index.php");
  }
  else {
    header("Location: index.php?error=1");
  }
}
