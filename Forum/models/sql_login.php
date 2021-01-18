<?php
session_start();
if (isset($_POST['pseudo'])){
    
  $username = stripslashes($_REQUEST['pseudo']);
  $password = stripslashes($_REQUEST['password']);
  $reponse = $bdd->query("SELECT * FROM `logins` WHERE Pseudo='$username' and Password='".hash('sha256',$password)."'");
  $result=$reponse->fetch();
  
  if($result==true){
      $_SESSION['pseudo'] = $username;
      header("Location: connecté.php");
  }
  else {
    header("Location: view/login_failed.php");
  
  }
}
