<?php  
if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
    $id_aut=$_GET['ID_auteur'];
    $id_art=$_GET['ID'];
    require ('models/connexion.php');
    require('view/header.php');
    require('models/search_all_posts.php');
    require('models/modif_comment.php');
    require('models/comment.php');
    require("view/articles.php");
}