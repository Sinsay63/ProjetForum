<?php
    $reponse = $bdd->query('select log.Pseudo,log.IsAdmin,log.ID,ban.Ban,ban.Raison_Ban from (SELECT * from logins where IsAdmin=0) as log left join ban on ban.ID_auteur= log.ID');
    $users = $reponse->fetchAll();
    
    

