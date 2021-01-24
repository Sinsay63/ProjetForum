<?php
session_start();
if(isset($_GET['page'])){
   $page=$_GET['page'];
    if ($page=='page_connexion'){
       require('controllers/to_connex.php');
   }
   else if ($page=='connexion'){
        require('controllers/after_connecté.php');
        }
   else if ($page=='inscription'){
        require('controllers/after_inscri.php');
        }
   
   else if ($page=='deconnexion'){
        require('controllers/logout.php');
   }
   
   else if ($page=='crea_article'){
        require('controllers/to_crea_article.php');
   }
   
   else if ($page=='creation_article'){
        require('controllers/create_topic.php');
   }
}
    else if(isset($_GET['error'])){
        require('controllers/to_connex.php');
    }
    
else{
    require ('models/connexion.php');
    require('view/header.php');
    require('models/search_all_posts.php');
    $resultes=search_all_post($bdd);
    require('view/list_posts.php');
    require('view/footer.php'); 
}
   
   

