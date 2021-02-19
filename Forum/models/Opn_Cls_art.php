<?php
if (isset ($_GET['opcl']) && isset($_GET['id'])){
    $id=$_GET['id'];
    $op_cl=$_GET['opcl'];
    if($op_cl==1){
        $opn = $bdd->prepare("UPDATE articles SET IsClosed = 0 WHERE ID= ?");
        $opn->execute(array($id));
        $open=$opn->fetch();
    }
    else if($op_cl==0){
        $cls = $bdd->prepare("UPDATE articles SET IsClosed = 1 WHERE ID= ?");
        $cls->execute(array($id));
        $clse =$cls->fetch();
    }
    if(isset($_GET['ID_auteur']) and isset($_GET['IDs'])){
        $autid=$_GET['ID_auteur'];
        $artid=$_GET['IDs'];
        header("location: index.php?page=page_article&ID_auteur=$autid&ID=$artid");
    }
    else{
          header("location: index.php");
    }
}