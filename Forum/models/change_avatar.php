<?php
$path=$_GET['url'];
$id=$_SESSION['ID'];
$repon = $bdd->prepare("UPDATE logins SET Avatar_Path= ? WHERE ID= ? ");
$repon->execute(array($path,$id));

if($repon){
    session_destroy();
    header("location: index.php");
}
