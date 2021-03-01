<?php

if (isset($_POST['commentaire'])){
    $commentaire= htmlspecialchars($_POST['commentaire']);

    $rEp = $bdd->prepare("INSERT INTO commentaires(Commentaires,ID_auteur) VALUES(?,?)");
    $rEp->execute(array($commentaire,$_SESSION['ID']));

    $idcom = $bdd->lastInsertId();
    $Rep = $bdd->prepare("INSERT INTO article_commentaire(ID_article,ID_commentaire) VALUES(?,?)");
    $Rep->execute(array($id_art,$idcom));
    $autid=$_GET['ID_auteur'];
    $artid=$_GET['ID'];
}

