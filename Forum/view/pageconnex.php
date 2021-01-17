<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/pageconnex.css" media="all"/>
    </head>
    <body>
    	<?php
    		require('view/header.php');
    	?>
    	<div class="main">
	        <div class="form_conn_inscri">  
	            <div class="conn_gauche">
	                <form action="log.php" method="post">
	                	<div class="titre">
	                		<p> Vous avez deja un compte? </p>
	                	</div>
	                	<div>
		                    <p>Votre pseudo: <input type="text" name="pseudo" required/></p>
		                    <p>Votre mot de passe : <input type="password" name="password" required/></p>
		                </div>
		                <div class="bottom_left">
		                    <p><input type="submit" value="Se connecter"></p>
		                    <p> Les cookies nous aident à fournir nos services. En utilisant nos Services ou en cliquant sur J'accepte, vous acceptez notre utilisation des cookies. Apprendre encore plus </p>
		                </div>
	                </form>
	            </div>
	            <div class="conn_droite">
	                <form action="after_inscri.php" method="post">
	                	<div class="titre">
	                		<p> Vous avez deja un compte? </p>
	                	</div>
	                	<div>
		                    <p>Votre prénom : <input type="text" name="prenom" required/></p>
		                    <p>Votre nom : <input type="text" name="nom" required/></p>
		                    <p>Votre email : <input type="email" name="mail" required/></p>
		                    <p>Votre mot de passe : <input type="password" name="mdp" required/></p>
		                    <p>Votre âge : <input type="integer" name="âge" required/></p>
		                    <p>Votre pseudo : <input type="text" name="pseudo" required/></p>
		                </div>
		                <div class="bottom_right">
	                    	<p><input type="submit" value="S'incrire"></p>
	                    	<div class="move_right">
	                    		<p> information obligatoire </p>
	                    	</div>
	                	</div>
	                </form>
	            </div>
	        </div>
	    </div>
    </body>
</html>