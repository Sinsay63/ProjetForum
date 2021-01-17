<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>  <div class="container">
        <?php 
            foreach ($resultes as $result) {
                ?>
        <div class="article">
            <div class="vuelike">
                
            </div>
            <div class="contenu">
                <div class="cont_haut">
                    <div class="titre">
                        <p class="artitre"><?php  echo $result['Titre'];?></p>
                    </div>
                    <div class="button_plu">
                        <input class="button_plus"type="button" value="..."/> 
                    </div>
                </div>
                <div class="contenu_bas">
                    <div class="pdp">
                        <img class="imgpdp" src="view/images/solo.PNG" alt=""/>
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