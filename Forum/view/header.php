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
                    <div class="inner">
                        <div class="img1">
                            <a href="index.php"><i class="fas fa-home"></i></a>
                        </div>
                        <div class="para">
                            <p> Bienvenue sur un forum rempli d'anecdotes en tout genre. </p>
                        </div>
                    </div>
                </div>
                <div class="mid">
                    <div class="Titre">
                        <h1 class="title">AnecdoteSpecialChars </h1>
                    </div>
                    <div class="recherche">
                        <form action="" method="post">
                            <input class="recherche-txt" type="text" name="recherche" placeholder="Rechercher..." minlength="3">
                            <button type="submit" class="btn_search">
                            <div class="bouton-btn">
                            <i class="fas fa-search"></i>
                        </div>
                        </button>
                        </form>
                    </div>  
                </div>
                <div class="droite">
                        <?php
                        if (isset($_SESSION['pseudo'])){ ?>
                        <div class="Hdroit">
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
                                            <?php
                                            if($_SESSION['IsAdmin']==1){ ?> 
                                                <div class="lien">
                                                    <?php echo '<a href="index.php?page=list_user" value="Users"> Users </a>';?>
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            </li>
                                            <li>
                                                <div class="lien">
                                                    <a href="index.php?page=deconnexion"  value="deconnexion">Deconnexion</a>
                                                    <i class="fas fa-angle-right"></i>
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
                            <button class="btn"> <span>Connexion</span></button>
                            <button class="btn"> <span>Inscription</span></button>
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319"><path  d="M0,64L48,64C96,64,192,64,288,80C384,96,480,128,576,122.7C672,117,768,75,864,69.3C960,64,1056,96,1152,96C1248,96,1344,64,1392,48L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <script type="text/javascript" src="view/javascript/modenuit.js"></script>
        </header>
    </body>
</html>
