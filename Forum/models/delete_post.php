<?php
        function delete($bdd){
            $reponse = $bdd->prepare('delete from articles where ID= ?');
            $reponse->execute(array($_GET['delete_id']));
            
        }
 
?>