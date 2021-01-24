<?php
$ID=$_SESSION['ID'];
$reponse = $bdd->query("SELECT * FROM `logins` WHERE ID='$ID'");
$infos = $reponse->fetchAll();