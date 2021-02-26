<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="view/css/list_post.css"/>
    </head>
    <body>  
        <div class="container">
            <div class="cote_cat">
                <div class="cat_populaire">
                    <p> categorie les plus populaire </p>
                </div>
                <div class="cat">
                    <p> categorie 1 </p>
                </div>
                <div class="cat">
                    <p> categorie 2 </p>
                </div>
                <div class="cat">
                    <p> categorie 3 </p>
                </div>
            </div>
            <div class="main">
                <div class="top_cat">
                    <div class="titre_cat">
                        <p> nom de la catégorie </p>
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
                echo '<a href="index.php?page=crea_article"><input type="button" value="Créer un nouveau sujet"></a>';
            }
        ?>          </div>
                </div>
        <?php 
            foreach ($resultes as $result) { ?>

            <div class="article">
                <div class="contenu">
                    <div class="contenu_gauche">
                    </div>
                    <div class="contenu_droite">
                        <div class="contenu_haut">
                            <div class="titre">
                                <a class="titre_text" href="index.php?page=page_article&ID_auteur=<?php echo $result['ID_auteur'];?>&ID=<?php echo $result['ID']; ?>"><p class="artitre"><?php  echo $result['Titre'];?></p></a>
                            </div>
                            <?php
                                if (isset($_SESSION['pseudo'])){
                                    if($_SESSION['IsAdmin']==1){?>
                                    <li>
                                        <input class="button_plus"type="button" value="..." /> 
                                        <ul>
                                            <li><a href="index.php?page=delete&delete_post_id=<?php echo $result['ID'];?>">Supprimer</a></li>
                                             <?php if($result['IsClosed']==0){ ?>
                                                    <li><a href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=0">Clore</a><li>
                                                <?php   }
                                                    else if($result['IsClosed']==1){ ?>
                                                    <li><a href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=1">Réouvrir</a><li>
                                            <?php    } ?>
                                        </ul>
                                    </li>
                              <?php }
                                    else if($_SESSION['ID']==$result['ID_auteur']){ ?>
                                        <ul>
                                            <li><div class="button_plu"><input class="button_plus"type="button" /> </div>
                                                <ul class="options">
                                                    <li><a href="index.php?page=delete&delete_post_id=<?php echo $result['ID'];?>">Supprimer</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                              <?php } 
                                }?>
                        </div>
                        <div class="contenu_bas">
                            <div class="pdp">
                                <img class="imgpdp" src="<?php echo $result['Avatar_Path'];  ?>" alt=""/>
                            </div>
                            <div class="auteur">
                                <?php echo 'Par '.$result['Pseudo']; ?>
                            </div>
                            <div class="date">
                              <?php  echo 'Le '.$result['Date_Publication']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php }  ?>
        </div>
        </div>
    </body>
</html>