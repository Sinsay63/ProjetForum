<?php
$ID=$_SESSION['ID'];
$reponse = $bdd->prepare("SELECT * FROM `logins` WHERE ID = ? ");
$rep->execute(array($ID));
$infos = $reponse->fetchAll();