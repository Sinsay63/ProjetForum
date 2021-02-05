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
                </div>
                <div class="mid">
                    <div class="Titre">
                        <h1 class="title">AnecdoteSpecialChars </h1>
                    </div>
                    <div class="recherche">
                        <label for="site-search" id="txt_search">Search the site:</label>
                        <input type="search" id="site-search" name="q" aria-label="Search through site content">
                        <button id="search">Search</button>
                    </div>  
                </div>
                <div class="droite">
                    <?php
                    if (isset($_SESSION['pseudo'])){
                        echo 'Bonjour '.$_SESSION['pseudo'];?>
                        <div class="dropdown">
                            <button type="button"> <img class="pp" src="<?php echo $_SESSION['Avatar'];   ?>"/></button> 
                            <div class="content">
                                <a href="index.php?page=profil"  value="Profil" >Profil</a>
                                <a href="index.php?page=deconnexion"  value="deconnexion">Deconnexion</a>
                                <?php
                                if($_SESSION['IsAdmin']==1){
                                    echo '<a href="index.php?page=list_user" value="Users"> Users </a>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php
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
