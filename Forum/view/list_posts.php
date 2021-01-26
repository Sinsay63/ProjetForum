<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="view/css/list_post.css"/>
    </head>
    <body>  <div class="container">
        <?php
        /*  */
            if (isset($_SESSION['pseudo'])){
                echo '<a href="index.php?page=crea_article"><input type="button" value="Créer un nouveau sujet"></a>';
            }
        ?>
        <?php 
            foreach ($resultes as $result) { ?>
            <div class="article">
                <div class="contenu">
                    <div class="cont_haut">
                        <div class="titre">
                            <a href="index.php?page=page_article&ID_auteur=<?php echo $result['ID_auteur'];?>&ID=<?php echo $result['ID']; ?>"><p class="artitre"><?php  echo $result['Titre'];?></p></a>
                        </div>
                        <?php
                            if (isset($_SESSION['pseudo'])){
                                if($_SESSION['IsAdmin']==1){?>
                                <li>
                                    <input class="button_plus"type="button" value="..." /> 
                                    <ul>
                                        <li><a href="controllers/delete.php?delete_id=<?php echo $result['ID'];?>">Supprimer</a></li>
                                    </ul>
                                </li>
                          <?php }
                                else if($_SESSION['ID']==$result['ID_auteur']){ ?>
                                    <ul>
                                        <li><div class="button_plu"><input class="button_plus"type="button" /> </div>
                                            <ul>
                                                <li><a href="controllers/delete.php?delete_id=<?php echo $result['ID'];?>">Supprimer</a></li>
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
      <?php }  ?>
        </div>
    </body>
</html>