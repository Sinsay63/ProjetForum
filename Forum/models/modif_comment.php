<?php
if(isset($_SESSION['ID'])){
    if(isset($_GET['modif'])){
        $commen=$bdd->prepare('select Commentaires from commentaires where ID_auteur = ? and ID= ?');
        $commen->execute(array($_SESSION['ID'],$_GET['modif']));
        $comme=$commen->fetchAll();
    }
    if(isset($_POST['new_comment'])){
        $comment=$_POST['new_comment'];
        $mod=$bdd->prepare('UPDATE commentaires SET Commentaires = ? WHERE ID_auteur= ? and ID = ?');
        $mod->execute(array($comment,$_SESSION['ID'],$_GET['modif']));
        $modif=$mod->fetchAll();
        $autid=$_GET['ID_auteur'];
        $artid=$_GET['ID'];
        ?>
        <script language="Javascript">
           <!--
                 document.location.replace("index.php?page=page_article&ID_auteur=<?php echo $autid;?>&ID=<?php echo $artid; ?>");
           // -->
        </script>
         <?php
    }
}



