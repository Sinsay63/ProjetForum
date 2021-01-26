<?php

if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
        $repons = $bdd->query("select log.Pseudo, art.Titre, art.Contenu, art.Date_Publication,art.ID_auteur,art.ID,log.Avatar_Path  from logins as log inner join articles as art on art.ID ='$id_art' and log.ID = '$id_aut'");
        $content = $repons->fetchAll();
    }
else {
    function search_all_post($bdd){
        $reponse = $bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur,log.Avatar_Path from logins as log inner join articles as art on art.ID_auteur = log.ID');
        $results = $reponse->fetchAll();
        return $results;
    }
}
    
