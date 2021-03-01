<?php
        if(isset($_GET['delete_post_id'])){
            $del = $bdd->prepare('delete from articles where ID= ?');
            $del->execute(array($_GET['delete_post_id']));
            
            $repons = $bdd->prepare('delete from article_categorie where id_article= ?');
            $repons->execute(array($_GET['delete_post_id']));
            header('location: index.php');
        }
        else if(isset($_GET['delete_com_id'])){
            
            $reponse = $bdd->prepare('delete from commentaires where ID= ?');
            $reponse->execute(array($_GET['delete_com_id']));
            
            $repons = $bdd->prepare('delete from article_commentaire where ID_commentaire = ?');
            $repons->execute(array($_GET['delete_com_id']));
            $autid=$_GET['ID_auteur'];
            $artid=$_GET['ID'];
            header("location: index.php?page=page_article&ID_auteur=$autid&ID=$artid");
        }
?>