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
                                    <p><?php echo $value['Contenu'];  ?></p>
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
            <?php   }?>
                
            
        </div>
    </body>
</html>