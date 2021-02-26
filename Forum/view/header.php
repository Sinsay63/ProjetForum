<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/header.css"/>
        <link rel="stylesheet" href="view/css/reset.css"/>
        <script src="https://kit.fontawesome.com/e4c565c7ff.js" crossorigin="anonymous"></script>
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
                        <input class="recherche-txt" type="text" name="box" placeholder="Rechercher...">
                        <a class="bouton-btn" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>  
                </div>
                <div class="droite">
                    <div class="Hdroit">
                        <?php
                        if (isset($_SESSION['pseudo'])){ ?>
                            <div class="nom"> 
                                <p>
                                    <?php echo 'Bonjour  ' .$_SESSION["pseudo"] ;?>
                                </p> 
                            </div>
                        <div class="dropdown">
                            <ul>
                                <li class="menud">
                                    <img class="pp" src="<?php echo $_SESSION['Avatar'];   ?>"/>
                                    <ul class="sub-menu">
                                        <li>
                                            <div class="lien">
                                                <a href="index.php?page=profil"  value="Profil" >Profil</a>
                                                <i class="fas fa-angle-right"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="lien">
                                                <a href="index.php?page=deconnexion"  value="deconnexion">Deconnexion</a>
                                                <i class="fas fa-angle-right"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <?php
                                            if($_SESSION['IsAdmin']==1){ ?> 
                                            <div class="lien">
                                                <?php echo '<a href="index.php?page=list_user" value="Users"> Users </a>';?>
                                                <i class="fas fa-angle-right"></i>
                                            <?php
                                            }
                                            ?>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    }
                        else{
                    ?>
                    <div class="connexion">
                        <a href="index.php?page=page_connexion"/>
                            <input class="bt1" id="b1" type="submit" value="Connexion"/>
                            <input id="b2" type="submit" value="Inscription"/>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="nuit">
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="label">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319"><path  d="M0,64L48,64C96,64,192,64,288,80C384,96,480,128,576,122.7C672,117,768,75,864,69.3C960,64,1056,96,1152,96C1248,96,1344,64,1392,48L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <script type="text/javascript" src="view/javascript/modenuit.js"></script>
        </header>
    </body>
</html>
