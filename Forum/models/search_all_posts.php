<?php
    function search_all_post($bdd){
        $reponse = $bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID, art.Date_Publication,art.ID_auteur from logins as log inner join articles as art on art.ID_auteur = log.ID');
        $results = $reponse->fetchAll();
        return $results;
    }
    ?>
