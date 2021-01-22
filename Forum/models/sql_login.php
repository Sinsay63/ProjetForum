<?php
session_start();

if (isset($_POST['pseudo'])){
  $log=0;
  $username = stripslashes($_REQUEST['pseudo']);
  $password = stripslashes($_REQUEST['password']);
  $reponse = $bdd->query("SELECT * FROM `logins` WHERE Pseudo='$username' and Password='".hash('sha256',$password)."'");
  $result=$reponse->fetch();
  
  if($result==true){
      $_SESSION['pseudo'] = $username;
      header("Location: index.php");
  }
  else {
    $log=1;
    header("Location: view/pageconnex.php");
  }
}
