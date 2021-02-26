<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/post.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/trix.css">
        <script type="text/javascript" src="view/javascript/trix.js"></script>
    </head>
    <body>
        <form class="container" action="index.php?page=creation_article" method="post">
            <div class="main">
                <div class="big_box">
                    <p> Création d'un sujet de discussion </p>
                    <select name="id_categorie">
                        <option value="">Choisir une categorie</option>
                        <option value="1">+18</option>
                        <option value="2">vacances</option>
                        <option value="3">insolites</option>
                        <option value="4">genantes</option>
                    </select>
                    <input type="text" name="titre" placeholder="Entrez un titre" maxlength="40" minlength="20">
                    <input id="x" class="contenu" type="hidden" name="contenu" placeholder="Entrez votre message" maxlength="200" minlength="10">
                    <trix-editor class="editor" input="x"></trix-editor>
                    <input type="submit" value="Poster le topic">
                </div>
            </div>
        </form>
    </body>
</html>