<?php
    function search_all_post($bdd){
        $reponse = $bdd->query('select log.Pseudo,art.Titre, art.Contenu,art.ID as id from logins as log inner join articles as art on art.ID_auteur = log.ID');
        $results = $reponse->fetchAll();
        return $results;
    }
    ?>
