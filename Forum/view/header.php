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
                <div class="Titre">
                        <h1>NOM DU FORUM </h1>
                </div>
                <label for="site-search">Search the site:</label>
                <input type="search" id="site-search" name="q" aria-label="Search through site content">
                <button>Search</button>
                <div class="droite">
                    <?php
                    if (isset($_SESSION['pseudo'])){
                        echo 'Bonjour '.$_SESSION['pseudo'];
                        echo '<a href="logout.php"><input type="button" value="deconnexion"></a>';
                    }
                    else{
                    ?>
                    <div class="bouton">
                        <a href="view/pageconnex.php"/>
                            <input id="b1" type="submit" value="Connexion"/>
                            <input id="b2" type="submit" value="Inscription"/>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="modenuit">
                        <button id="darkTrigger">Activer le thème sombre</button>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
