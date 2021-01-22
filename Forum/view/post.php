<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/post.css"/>
    </head>
    <body>
    	<form class="container" action="../create_topic.php">
    		<div class="main">
    			<div class="option">
    				<p> Nom de la catégorie </p>
    			</div>
    			<div class="big_box">
    				<p> Création d'un sujet de discussion </p>
    				<select name="id_categorie">
    					<option value="">Choisir une categorie</option>
    					<option value="1">+18</option>
    					<option value="2">vacances</option>
    					<option value="3">insolites</option>
    					<option value="4">genantes</option>
    				</select>
    				<input type="text" name="titre" placeholder="entrer titre" maxlength="40" minlength="5">
    				<input class="contenu" type="text" name="contenu" placeholder="entrer votre message" maxlength="200" minlength="10">
    				<input type="submit" value="poster le topic">
    				</a>
    			</div>
    		</div>
	    </form>





    </body>