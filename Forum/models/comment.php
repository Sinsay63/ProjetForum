<?php

if (isset($_POST['commentaire'])){
    $commentaire= htmlspecialchars($_POST['commentaire']);

    $rEp = $bdd->prepare("INSERT INTO commentaires(Commentaires,ID_auteur) VALUES(?,?)");
    $rEp->execute(array($commentaire,$_SESSION['ID']));

    $repon = $bdd->prepare("select ID from commentaires where Commentaires = ? ");
    $repon->execute(array($commentaire));
    $comid = $repon->fetchAll();

    foreach ($comid as $id_com) {
      $idcom=$id_com['ID'];  
    }
    $Rep = $bdd->prepare("INSERT INTO article_commentaire(ID_article,ID_commentaire) VALUES(?,?)");
    $Rep->execute(array($id_art,$idcom));
    if($Rep){
        $autid=$_GET['ID_auteur'];
        $artid=$_GET['ID']; ?>
        <script language="Javascript">
           <!--
                 document.location.replace("index.php?page=page_article&ID_auteur=<?php echo $autid;?>&ID=<?php echo $artid; ?>");
           // -->
     </script>
         <?php
        }
}

