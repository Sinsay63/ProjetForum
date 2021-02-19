<html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/in_articles.css"/>
    </head>
    <body>
        <div class="content">
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
                            <div>
                                <div class="art_bas">
                                    <p class="publié"><?php echo "Publié par ".$value['Pseudo'];  ?></p>
                                    <img class="pp1" src="<?php echo $value['Avatar_Path'];  ?>"/>
                                    <p ><?php echo "le  ".$value['Date_Publication'];  ?></p>
                                </div>
                            </div>
                        </div>
            <?php   }
                    if (isset($_SESSION['ID'])){
                        if($_SESSION['IsAdmin']==1){ ?>
                            <a href="index.php?page=delete&delete_post_id=<?php echo $value['ID'];?>">Supprimer</a>
            <?php
                        if($value['IsClosed']==0){ ?>
                            <a href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=0&ID_auteur=<?php echo $_GET['ID_auteur'];?>&IDs=<?php echo $_GET['ID'];?>">Clore</a>
                <?php   }
                        else if($value['IsClosed']==1){ ?>
                            <a href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=1&ID_auteur=<?php echo $_GET['ID_auteur'];?>&IDs=<?php echo $_GET['ID'];?>">Réouvrir</a>
                    <?php    } 
                    }
                    }
                    if (isset($com)){
                        foreach ($com as $come) {
                            if(isset($_GET['modif']) and $come['ID']==$_GET['modif']){ ?>
                            <form action="" method="post">
                                <input style="width:400px; height:40px;" name="new_comment" value='<?php echo $comme['Commentaires'];  ?>'>
                                <input type="submit" value="Modifier">
                            </form>
                            <?php
                            }
                            else{
?>
                            <div class="commentaires">
                                <div><?php  echo $come['Commentaires']; 
                                if(isset($_SESSION['pseudo'])) {
                                    if ($_SESSION['IsAdmin']==1 || $come['Pseudo']==$_SESSION['pseudo']){?>
                                        <a href="index.php?page=delete&delete_com_id=<?php echo $come['ID'];?>&ID_auteur=<?php echo $_GET['ID_auteur'];?>&ID=<?php echo $_GET['ID'];?>">Supprimer</a></div>
                              <?php }
                                    if($come['Pseudo']==$_SESSION['pseudo']){ ?>
                                        <a href="index.php?page=page_article&ID_auteur=<?php echo $_GET['ID_auteur'];?>&ID=<?php echo $_GET['ID'];?>&modif=<?php echo $come['ID']; ?>">Modifier</a>
                                        <?php
                                    }
                                }?>
                            </div>
                            <div>
                                <?php  echo 'Ecrit par '.$come['Pseudo']; ?>
                            </div>
                </div>
                            <?php   }}
                    }
                if($value['IsClosed']==0){
                ?>
            <form action="index.php?page=page_article&ID_auteur=<?php echo $id_aut;?>&ID=<?php echo $id_art; ?>" method="post">
                <p>Votre commentaire:</p>
                <input type="text" name="commentaire"/>
                <input type="submit" value="Envoyer" >
            </form>
            <?php
            
                } ?> 
        </div>
    </body>
</html>