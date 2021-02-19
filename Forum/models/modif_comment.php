<?php
if(isset($_SESSION['ID'])){
    
    $comm=$bdd->prepare('select Commentaires from commentaires where ID_auteur = ?');
    $comm->execute(array($_SESSION['ID']));
    $com=$com->fetch();
    
    if(isset($_POST['new_comment'])){
        $comment=$_POST['new_comment'];
        $mod=$bdd->prepare('UPDATE commentaires SET Commentaires = ? WHERE ID_auteur= ?');
        $mod->execute(array($comment,$_SESSION['ID']));
        $modif=$mod->fetch();
    }
}
