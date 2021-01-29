<?php

if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
        $repons = $bdd->prepare("select log.Pseudo, art.Titre, art.Contenu, art.Date_Publication,art.ID_auteur,art.ID,log.Avatar_Path  from logins as log inner join articles as art on art.ID = ? and log.ID = ? ");
        $repons->execute(array($id_art,$id_aut));
        $content = $repons->fetchAll();
        
        $repa= $bdd->prepare("SELECT art.ID,com.Commentaires,log.Pseudo,com.Date_Commentaire,com.ID from Commentaires as com inner join article_commentaire as art_com on com.ID = art_com.ID_commentaire inner join logins as log on com.ID_auteur = log.ID inner join articles as art on art_com.ID_article = art.ID where art.ID = ?  ORDER BY com.Date_Commentaire ASC");
        $repa->execute(array($id_art));
        $com= $repa->fetchAll();
}
else {
        $reponse = $bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path from logins as log inner join articles as art on art.ID_auteur = log.ID');
        $resultes = $reponse->fetchAll();
}

    
