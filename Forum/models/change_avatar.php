<?php
$path=$_GET['url'];
$id=$_SESSION['ID'];
$repon = $bdd->query("UPDATE logins SET Avatar_Path='$path' WHERE ID= '$id'");

if($repon){
    session_destroy();
    header("location: index.php");
}
