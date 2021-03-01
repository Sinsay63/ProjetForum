<?php

if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
    //Recherche des articles
    
        $repons = $bdd->prepare("select log.Pseudo, art.Titre, art.Contenu, art.Date_Publication,art.ID_auteur,art.ID,log.Avatar_Path,art.IsClosed from logins as log inner join articles as art on art.ID = ? and log.ID = ?");
        $repons->execute(array($id_art,$id_aut));
        $content = $repons->fetchAll();
        
    // Recherche des commentaires
        
        $repa= $bdd->prepare("SELECT art.ID,com.Commentaires,log.Pseudo,com.Date_Commentaire,com.ID from Commentaires as com inner join article_commentaire as art_com on com.ID = art_com.ID_commentaire inner join logins as log on com.ID_auteur = log.ID inner join articles as art on art_com.ID_article = art.ID where art.ID = ?  ORDER BY com.Date_Commentaire ASC");
        $repa->execute(array($id_art));
        $com= $repa->fetchAll();
}
else if(isset($_GET['cat'])){
    $cat=$_GET['cat'];
    if($cat=='moi'){
        $reponse = $bdd->prepare('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path,art.IsClosed,cat.images,cat.nom from logins as log,articles as art,categories as cat,article_categorie as art_cat where log.ID = ?and art.ID_auteur = ?and  art_cat.id_article = art.ID  and cat.id = art_cat.id_categorie');
        $reponse->execute(array($_SESSION['ID'],$_SESSION['ID']));
        $resultes = $reponse->fetchAll();
    }
    else{
        $reponse = $bdd->prepare('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path,art.IsClosed,cat.images,cat.nom from logins as log inner join articles as art on art.ID_auteur = log.ID inner join article_categorie as art_cat on art_cat.id_article = art.ID inner join categories as cat on cat.id = art_cat.id_categorie and cat.id= ?');
        $reponse->execute(array($cat));
        $resultes = $reponse->fetchAll();
    }
}
// Moddèle barre de recherche
else if (isset($_POST['recherche'])){
    $search=$_POST['recherche'];
    $recherche=$bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path,art.IsClosed,cat.images,cat.nom from logins as log,articles as art,categories as cat,article_categorie as art_cat where art.ID_auteur = log.ID and  art_cat.id_article = art.ID  and cat.id = art_cat.id_categorie and ((log.Pseudo like "' .$search.'%" or log.Pseudo like "%' .$search.'" or log.Pseudo like "%' .$search.'%") or (art.Titre like "' .$search.'%" or art.Titre like "%' .$search.'" or art.Titre like "%' .$search.'%"))');
    $resultes=$recherche->fetchAll();
}
else {
    $reponse = $bdd->prepare('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path,art.IsClosed,cat.images,cat.nom from logins as log inner join articles as art on art.ID_auteur = log.ID inner join article_categorie as art_cat on art_cat.id_article = art.ID inner join categories as cat on cat.id = art_cat.id_categorie');
    $reponse->execute(array());
    $resultes = $reponse->fetchAll();
}

    
