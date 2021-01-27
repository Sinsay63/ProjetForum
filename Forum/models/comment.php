<?php


if (isset($_POST['commentaire'])){
    $commentaire= htmlspecialchars($_POST['commentaire']);

    $rEp = $bdd->query("INSERT INTO commentaires(Commentaires,ID_auteur) VALUES('?,?')");
    $rEp->execute(array($commentaire,$_SESSION['ID']));

    $repons = $bdd->query("select ID from Commentaires where Commentaires = '$commentaire'");
    $comid = $repons->fetchAll();

    $Rep = $bdd->query("INSERT INTO article_commentaire(ID_article,ID_commentaire) VALUES('?,?')");
    $Rep->execute(array($id_art,$comid['ID']));
    
    
    header("location: index.php?page=page_article&ID_auteur=". echo $result['ID_auteur']".&ID=". echo $result['ID']. ");
}

