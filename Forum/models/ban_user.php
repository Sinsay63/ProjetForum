<?php

$reponse = $bdd->prepare("INSERT INTO ban(Ban_Vie,ID_auteur) VALUES (?,?)");
$reponse->execute(array("1",$id));
$Ban = $reponse->fetch();
