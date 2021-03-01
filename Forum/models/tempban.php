<?php
    $dateheure= htmlspecialchars($_POST['dateheure']);
    $reponse = $bdd->prepare("INSERT INTO ban(Ban,Durée_Ban,Raison_Ban,ID_auteur) VALUES (?,?,?,?)");
    $reponse->execute(array("1",$dateheure,$raison,$id));
    $result=$reponse->fetch();
    if($result){
        header('location: index.php?page=list_user');
    }

