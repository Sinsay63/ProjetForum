<?php

if (isset($_POST['titre'], $_POST['id_categorie'], $_POST['contenu'])){
    
    $titre = htmlspecialchars($_POST['titre']);
    $id_categorie = htmlspecialchars($_POST['id_categorie']);
    $contenu = htmlentities($_POST['contenu'], ENT_QUOTES ,"UTF-8");
    $id_auteur=$_SESSION['ID'];
    
    $reponse = $bdd->prepare('INSERT INTO articles(Titre,Contenu,ID_auteur) VALUES (?,?,?)');
    $reponse->execute(array($titre,$contenu,$id_auteur));

    $reponses = $bdd->query("select ID from articles WHERE Titre = '$titre' ");
    $results = $reponses->fetchAll();
    foreach ($results as $value) {
        $id_article=$value["ID"];
    }
$repons = $bdd->prepare('INSERT INTO article_categorie (id_article,id_categorie) VALUES (?,?)');
$repons->execute(array($id_article,$id_categorie));

if($repons){
    header("location: index.php");
}
}