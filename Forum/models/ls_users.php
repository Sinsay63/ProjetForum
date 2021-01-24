<?php
    $reponse = $bdd->query('select log.Pseudo,ban.Ban_Vie,log.IsAdmin,log.ID from (SELECT * from logins where IsAdmin=0) as log left join ban on ban.ID_auteur= log.ID');
    $users = $reponse->fetchAll();
    
    

