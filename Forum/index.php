<?php
session_start();
if(isset($_GET['page'])){
    
   $page=$_GET['page'];
   if($page=='accueil'){
       require('controllers/accueil.php');
   }
    else if ($page=='page_connexion'){
        if(isset($_GET['error'])){
            require('controllers/to_connex.php');
        } 
        else{
            require('controllers/to_connex.php');
        }
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
    else if ($page=='profil'){
        if(isset($_GET['chg_profil'])){
            require('controllers/to_profile.php');
        }
        else{
            require('controllers/to_profile.php');
        }
    }
    else if ($page=='modif_profil'){
        require('controllers/modif_profil.php');
    }
    else if($page=='list_user'){
       require('controllers/to_list_user.php');
     }
    else if($page=='tempban'){
       require('controllers/temp_deban.php');
    }
    else if ($page=='page_article'){
        if(isset($_GET['ID_auteur']) && isset($_GET['ID'])){
            require("controllers/in_article.php");
        }
   }
    else if ($page=='new_avatar'){
            require("controllers/chg_avatar.php");
    }
        else if ($page=='delete'){
            require('controllers/delete.php');
        }
        else if($page=="opencloseart"){
            if (isset ($_GET['id']) && isset($_GET['opcl'])){
                require('controllers/open_close_art.php');
            }
        }
} 
else{
    header('location: index.php?page=accueil');
}

   
   

