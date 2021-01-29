<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/header.css"/>
    </head>
    <body>
        <header>
            <div class="top">
                <div class="gauche">
                    <a href="index.php"/><img class="logo" src="view/images/logo.png" alt=""/></a>
                
                <div class="Titre">
                    <h1>NOM DU FORUM </h1>
                    <?php 
                    
                    $origin = new DateTime('2021-01-29 13:19:11');
                    $date1 = new DateTime("now");
                    $interval = $origin->diff($date1);
                echo $interval->format('%R%a days');
                    ?>
                </div>
                <label for="site-search" id="txt_search">Search the site:</label>
                <input type="search" id="site-search" name="q" aria-label="Search through site content">
                <button id="search">Search</button>
                </div>
                <div class="droite">
                    <?php
                    if (isset($_SESSION['pseudo'])){
                        echo 'Bonjour '.$_SESSION['pseudo'];?><img class="pp" src="<?php echo $_SESSION['Avatar'];   ?>"/>      <?php
                        echo '<a href="index.php?page=deconnexion"><input type="button" value="deconnexion"></a>';
                        echo '<a href="index.php?page=profil"><input type="button" value="Profil"></a>';
                        
                        if($_SESSION['IsAdmin']==1){
                            echo '<a href="index.php?page=list_user"><input type="button" value="Users"></a>';
                        }
                    }
                    else{
                    ?>
                    <div class="bouton">
                        <a href="index.php?page=page_connexion"/>
                            <input id="b1" type="submit" value="Connexion"/>
                            <input id="b2" type="submit" value="Inscription"/>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="modenuit">
                        <button id="darkTrigger">Dark Theme</button>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
