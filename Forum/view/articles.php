<html>
    
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/in_articles.css"/>
    </head>
    <body>
        <div class="content">
            <div>
                <?php   
                    foreach ($content as $value) {  ?>
                        <div class="content_article">
                            <div class="Titre">
                                <p><?php echo $value['Titre'];  ?></p>
                            </div>
                            <div class="">

                            </div>
                        </div>
            <?php   }
                ?>
            </div>
            
        </div>
    </body>
</html>

