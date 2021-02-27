<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="view/css/list_post.css"/>
    </head>
    <body>  
        <div class="container">
            <div class="main">
                <div class="top_cat">
                    <div class="titre_cat">
                        <select class="cat_menu" name="cat_menu">
                            <option value="" hidden>Recherche de catégories</option>
                            <option value="1">+18</option>
                            <option value="2">Vacances</option>
                            <option value="2">Insolites</option>
                            <option value="2">Génantes</option>
                        </select>
                    </div>
                    <div class="mes_topics">
                        <select class="mes_topics_menu" name="mes_topics">
                            <option value="" hidden>Mes topics</option>
                            <option value="1">Propres créations</option>
                            <option value="2">Topics aimés</option>
                        </select>

                    </div>
                    <div class="crea_sujet">

        <?php
            if (isset($_SESSION['pseudo'])){
                echo '<a href="index.php?page=crea_article"><input class="button_crea_sujet" type="button" value="Créer un nouveau sujet"></a>';
            }
        ?>          </div>
                </div>
        <?php 
            foreach ($resultes as $result) { ?>

            <div class="article">
                <div class="contenu">
                    <div class="contenu_gauche">
                        <div class="contenu_haut">
                            <div class="titre">
                                <a class="titre_text" href="index.php?page=page_article&ID_auteur=<?php echo $result['ID_auteur'];?>&ID=<?php echo $result['ID']; ?>"><p class="artitre"><?php  echo $result['Titre'];?></p></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="contenu_droite">
                        <div class="pdp_aut">
                            <div class="pdp">
                                <img class="imgpdp" src="<?php echo $result['Avatar_Path'];  ?>" alt=""/>
                            </div>
                            <div class="auteur">
                                <?php echo $result['Pseudo']; ?>
                            </div>
                        </div>
                        <div class="date">
                          <?php  echo 'Le '.$result['Date_Publication']; ?>
                        </div>
                        <?php
                                if (isset($_SESSION['pseudo'])){
                                    if($_SESSION['IsAdmin']==1){?>
                                    <li class="bouton_plus">
                                        <a class="button_plus" type="button">...</a>
                                        <ul class="box_supprimer">
                                    
                                            <li><a class="white" href="index.php?page=delete&delete_post_id=<?php echo $result['ID'];?>">Supprimer</a></li>
                                             <?php if($result['IsClosed']==0){ ?>
                                                    <li>
                                                        <div class="button_clore"><a class="white" href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=0">Clore</a><li>
                                                <?php   }
                                                    else if($result['IsClosed']==1){ ?>
                                                    <li><a class="white" href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=1">Réouvrir</a><li>
                                            <?php    } ?>
                                        </ul>
                                    </li>
                              <?php }
                                    else if($_SESSION['ID']==$result['ID_auteur']){ ?>
                                        <ul>
                                            <li><div class="button_plu"><input class="button_plus"type="button" /> </div>
                                                <ul class="options">
                                                    <li><div class="button_supprimer"><a href="index.php?page=delete&delete_post_id=<?php echo $result['ID'];?>">Supprimer</a></div></li>
                                                </ul>
                                            </li>
                                        </ul>
                              <?php } 
                                }?>
                    </div>
                </div>
            </div>
      <?php }  ?>
        </div>
        </div>
    </body>
</html>