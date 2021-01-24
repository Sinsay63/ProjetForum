<?php

$reponse = $bdd->prepare("INSERT INTO ban(Ban,Ban_Vie,Raison_ban,ID_auteur) VALUES (?,?,?,?)");
$reponse->execute(array("1","1",$raisons,$id));