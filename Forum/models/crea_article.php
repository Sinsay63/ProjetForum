<?php

if (isset($_REQUEST['titre'], $_REQUEST['id_categorie'], $_REQUEST['contenu'])){
    
    $titre = stripslashes($_REQUEST['titre']);
    $id_categorie = stripslashes($_REQUEST['id_categorie']);
    $contenu = stripslashes($_REQUEST['contenu']);
    

$reponse = $bdd->prepare('INSERT INTO articles(Titre,Contenu) VALUES (?,?)');
$reponse->execute(array($titre,$contenu));

 $reponses = $bdd->query("select ID from articles WHERE Titre = '$titre' ");
 $results = $reponses->fetchAll();
}
foreach ($results as $value) {
    $id_article=$value["ID"];
}
$repons = $bdd->prepare('INSERT INTO article_categorie (id_article,id_categorie) VALUES (?,?)');
$repons->execute(array($id_article,$id_categorie));

if($repons){
    header("location: index.php");
}