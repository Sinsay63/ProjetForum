<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/style.css"/>
    </head>
    <body>
        <div class="form_conn_inscri">  
            <div class="conn_gauche">
                <form action="log.php" method="post">
                    <p>Votre pseudo: <input type="text" name="pseudo" required/></p>
                    <p>Votre mot de passe : <input type="password" name="password" required/></p>
                    <p><input type="submit" value="Se connecter"></p>
                </form>
            </div>
            <div class="conn_droite">
                <form action="after_inscri.php" method="post">
                    <p>Votre prénom : <input type="text" name="prenom" required/></p>
                    <p>Votre nom : <input type="text" name="nom" required/></p>
                    <p>Votre email : <input type="email" name="mail" required/></p>
                    <p>Votre mot de passe : <input type="password" name="mdp" required/></p>
                    <p>Votre âge : <input type="integer" name="âge" required/></p>
                    <p>Votre pseudo : <input type="text" name="pseudo" required/></p>
                    <p><input type="submit" value="S'incrire"></p>
                </form>
            </div>
        </div>
    </body>
</html>