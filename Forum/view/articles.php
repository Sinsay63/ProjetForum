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
                            <div class="">
                                <div class="art_bas">
                                    <p class="publié"><?php echo "Publié par ".$value['Pseudo'];  ?></p>
                                    <img class="pp1" src="<?php echo $value['Avatar_Path'];  ?>"/>
                                    <p ><?php echo "le  ".$value['Date_Publication'];  ?></p>
                                </div>
                            </div>
                        </div>
            <?php   }
            if ($_SESSION['IsAdmin']==1){
                if($value['IsClosed']==0){ ?>
                    <a href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=0">Clore</a>
        <?php   }
                else if($value['IsClosed']==1){ ?>
                    <a href="index.php?page=opencloseart&id=<?php echo $value['ID'];?>&opcl=1">Réouvrir</a>
            <?php    } 
            }
                if (isset($com)){
                    foreach ($com as $come) { ?>
                        <div class="commentaires">
                            <div><?php  echo $come['Commentaires']; if(isset($_SESSION['pseudo'])) {
                                if ($_SESSION['IsAdmin']==1 || $come['Pseudo']==$_SESSION['pseudo']){
                            ?><a href="index.php?page=delete&delete_com_id=<?php echo $come['ID'];?>">Supprimer</a></div>
                                <?php } 
                                }?>
                            <div><?php  echo 'Ecrit par '.$come['Pseudo']; ?></div>
                        </div>
        <?php       }
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