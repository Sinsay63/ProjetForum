<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/post.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/trix.css">
        <script type="text/javascript" src="view/javascript/trix.js"></script>
    </head>
    <body>
        <form class="huge_container" action="index.php?page=creation_article" method="post">
            <div class="main">
                <div class="big_box">
                    <p class="align_toi"> Création d'un sujet de discussion </p>
                    <select class="choix_cat" name="id_categorie">
                        <option value="">Choisir une categorie</option>
                        <option value="1">+18</option>
                        <option value="2">vacances</option>
                        <option value="3">horreur</option>
                        <option value="4">gênante</option>
                    </select>
                    <input class="choix_titre" type="text" name="titre" placeholder="Entrez un titre" maxlength="40" minlength="10">
                    <input id="x" class="contenu" type="hidden" name="contenu" placeholder="Entrez votre message" maxlength="200" minlength="10">
                    <trix-editor class="editor" input="x"></trix-editor>
                    <div class="zone_button">
                        <input class="poster_le_topic" type="submit" value="Poster le topic">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>