<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Articles</title>
        <link rel="stylesheet" href="view/css/list_post.css"/>
        <script>
            function redirige (myvalue) {
                switch(myvalue){
                    case '1':
                        window.location.assign("index.php?page=accueil&cat=1");
                        break;
                    case '2':
                        window.location.assign("index.php?page=accueil&cat=2");
                        break;
                    case '3':
                        window.location.assign("index.php?page=accueil&cat=3");
                        break;
                    case '4':
                        window.location.assign("index.php?page=accueil&cat=4");
                        break;
                    case '5':
                        window.location.assign("index.php?page=accueil&cat=moi");
                        break;
                    default:
                        window.location.assign("index.php?page=page_connexion");
                        break;
                }
            }
        </script>
    </head>
    <body>  
        <div class="container">
            <div class="main">
                <div class="top_cat">
                    <div class="titre_cat">
                        <select class="cat_menu" name="cat_menu" onChange="redirige(this.value)">
                            <option value="" hidden>Recherche de catégories</option>
                            <option value="1">+18</option>
                            <option value="2">Vacances</option>
                            <option value="3">Horreurs</option>
                            <option value="4">Génantes</option>
                        </select>
                    </div>
                    <?php
                    if (isset($_SESSION['pseudo'])){?>
                        <div class="mes_topics">
                            <select class="mes_topics_menu" name="mes_topics" onChange="redirige(this.value)">
                                <option value="" hidden>Mes topics</option>
                                <option value="5">Mes articles</option>
                            </select>
                        </div>
                        <div class="crea_sujet">
                            <a href="index.php?page=crea_article"><input class="button_crea_sujet" type="button" value="Créer un nouveau sujet"></a>
                        </div> <?php
                    } ?> 
                </div>
                <?php 
                foreach ($resultes as $result) { ?>
                    <div class="article">
                        <div class="contenu">
                            <div class="contenu_gauche">
                                <div class="box_cat_img">
                                    <img class="img_cat" src="<?php echo $result['images']; ?>">
                                </div>
                                <div class="contenu_haut">
                                    <div class="titre">
                                        <p class="artitre"><?php  echo $result['Titre'];?></p>
                                    </div>
                                    <div class="voir_article">
                                        <a class="btn_voir_article" href="index.php?page=page_article&ID_auteur=<?php echo $result['ID_auteur'];?>&ID=<?php echo $result['ID']; ?>"> Voir l'article</a>
                                            
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
                                            <?php 
                                            if($result['IsClosed']==0){ ?>
                                                <li>
                                                    <a class="white" href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=0">Clore</a>
                                                </li>
                                                <?php   }
                                                else if($result['IsClosed']==1){ ?>
                                                    <li>
                                                        <a class="white" href="index.php?page=opencloseart&id=<?php echo $result['ID'];?>&opcl=1">Réouvrir</a>
                                                    </li>
                                        <?php   } ?>
                                        </ul>
                                    </li>
                              <?php }
                                    else if($_SESSION['ID']==$result['ID_auteur']){ ?>
                                        <ul>
                                            <li>
                                                <div class="button_plus">
                                                    <a class="button_plus" type="button">...</a>
                                                </div>
                                                <ul class="box_supprimer2">
                                                    <li>
                                                        <div class="button_supprimer"><a href="index.php?page=delete&delete_post_id=<?php echo $result['ID'];?>">Supprimer</a></div>
                                                    </li>
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