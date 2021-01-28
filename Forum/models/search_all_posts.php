<?php

if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
        $repons = $bdd->query("select log.Pseudo, art.Titre, art.Contenu, art.Date_Publication,art.ID_auteur,art.ID,log.Avatar_Path  from logins as log inner join articles as art on art.ID ='$id_art' and log.ID = '$id_aut'");
        $content = $repons->fetchAll();
        
        $repa= $bdd->query("SELECT art.ID,com.Commentaires,log.Pseudo,com.Date_Commentaire,com.ID from Commentaires as com inner join article_commentaire as art_com on com.ID = art_com.ID_commentaire inner join logins as log on com.ID_auteur = log.ID inner join articles as art on art_com.ID_article = art.ID where art.ID ='$id_art' ORDER BY com.Date_Commentaire ASC");
        $com= $repa->fetchAll();
}
else {
    function search_all_post($bdd){
        $reponse = $bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path from logins as log inner join articles as art on art.ID_auteur = log.ID');
        $results = $reponse->fetchAll();
        return $results;
    }
}

    
