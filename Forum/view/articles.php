<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/in_articles.css"/>
        
    </head>
    <body>
        <div class="content">
            <div class="colonne_gauche">
                <?php   
                foreach ($content as $value) {  ?>
                    <div class="content_article">
                        <div class="haut">
                            <div class="art_titre">
                                <p><?php echo $value['Titre'];  ?></p>
                            </div>
                        </div>
                        <div class="contenu_art">
                            <div class="">
                                <p><?php echo html_entity_decode($value['Contenu']);  ?></p>
                            </div> 
                        </div> 
                        <div class="art_bas">
                            <div class="pseudoart">
                                <p class="publié"><?php echo "Publié par ".$value['Pseudo'];  ?></p>
                                <img class="pp1" src="<?php echo $value['Avatar_Path'];  ?>"/>
                            </div>
                            <div class="datepubli">
                                <p ><?php echo "le  ".$value['Date_Publication'];  ?></p>
                            </div>
                        </div>
                    </div>
        <?php   }
                if (isset($_SESSION['ID'])){
                    if($_SESSION['IsAdmin']==1){ ?>
                        <a class="liencom" href="index.php?page=delete&delete_post_id=<?php echo $value['ID'];?>">Supprimer</a>
                 <?php  if($value['IsClosed']==0){ ?>
                            <a class="liencom" href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=0&ID_auteur=<?php echo $_GET['ID_auteur'];?>&IDs=<?php echo $_GET['ID'];?>">Clore</a>
                <?php   }
                        else if($value['IsClosed']==1){ ?>
                        <a class="liencom" href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=1&ID_auteur=<?php echo $_GET['ID_auteur'];?>&IDs=<?php echo $_GET['ID'];?>">Réouvrir</a> 
                <?php    } 
                    }
                }
                if (isset($com)){ ?>
                    <div class="content_com"> <?php
                        foreach ($com as $come) { ?>
                             <?php
                                if(isset($_GET['modif']) and $come['ID']==$_GET['modif']){ ?>
                                    <div class="commentaires">
                                        <div class="comment_content">
                                            <form action="" method="post">
                                                <input style="width:400px; height:40px;" name="new_comment" value='<?php echo $come['Commentaires'];  ?>' required minlength="5">
                                                <input type="submit" value="Modifier">
                                            </form>
                                            <div class="margin">
                                                <?php  echo 'Ecrit par '.$come['Pseudo']; ?>
                                            </div>
                                        </div>
                                    </div>
                          <?php }
                                else{ ?>
                                    <div class="commentaires">
                                        <div class="comment_content">
                                    <?php  echo $come['Commentaires']; 
                                            if(isset($_SESSION['pseudo'])) {
                                                if ($_SESSION['IsAdmin']==1 || $come['Pseudo']==$_SESSION['pseudo']){?>
                                                        <div class="margin">
                                                            <a  class="liencom" href="index.php?page=delete&delete_com_id=<?php echo $come['ID'];?>&ID_auteur=<?php echo $_GET['ID_auteur'];?>&ID=<?php echo $_GET['ID'];?>">Supprimer</a>
                                                        </div>
                                        <?php   }
                                                if($come['Pseudo']==$_SESSION['pseudo']){ ?>
                                                    <a class="liencom" href="index.php?page=page_article&ID_auteur=<?php echo $_GET['ID_auteur'];?>&ID=<?php echo $_GET['ID'];?>&modif=<?php echo $come['ID']; ?>">Modifier</a>
                                      <?php     }
                                            }  ?>
                                            <div class="margin">
                                                <?php  echo 'Ecrit par '.$come['Pseudo']; ?>
                                            </div>
                                        </div>
                                    </div>
                        <?php   } ?>
                 <?php  } ?>
                    </div><?php
                }
                if($value['IsClosed']==0 && isset($_SESSION['ID'])) { ?>
                    <form class="poster_com" action="index.php?page=page_article&ID_auteur=<?php echo $id_aut;?>&ID=<?php echo $id_art; ?>" method="post">
                        <p>Votre commentaire:</p>
                        <input class="envoie_com" type="text" minlength="5" name="commentaire"/>
                        <input class="button_envoie_com" type="submit" value="Envoyer" >
                    </form>
        <?php   } ?> 
            </div>
        </div>
    </body>
</html>