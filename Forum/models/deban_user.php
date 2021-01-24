<?php
    $reponse = $bdd->prepare('delete from ban where ID_auteur= ?');
    $reponse->execute(array($id));