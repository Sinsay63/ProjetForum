<?php
        function delete($bdd){
            $reponse = $bdd->prepare('delete from articles where ID= ?');
            $reponse->execute(array($_GET['delete_id']));
            
            $repons = $bdd->prepare('delete from article_categorie where id_article= ?');
            $repons->execute(array($_GET['delete_id']));
            
        }
 
?>