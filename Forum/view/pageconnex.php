<div class="form_conn_inscri">  
    <div class="conn_gauche">
        <div class="form">
            <div class="titreconnex">
                <h1>Vous avez déjà un compte?</h1>
            </div>
            <form action="log.php" method="post">
                <div class="saisies">
                    <div class="nom_saisies"><p>Votre pseudo: </p> </div>
                    <div class="sais"><input type="text" name="pseudo" required/></div>
                </div>
                <div class="saisies">
                    <div class="nom_saisies"> <p>Votre mot de passe :</p></div>
                    <div class="sais"><input type="password" name="password" required/>  </div>
                </div>
                <div class="btn_envoi">
                    <input type="submit" value="Se connecter">
                </div>
            </form>
        </div>
    </div>
    <div class="conn_droite">
        <div class="form2">
            <div class="titreconnex">
                <h1>Création d'un compte.</h1>
            </div>
            <form action="after_inscri.php" method="post">
                <div class="saisies">
                    <div class="nom_saisies">
                        <p>Votre prénom :</p>
                    </div>
                    <div class="sais">
                        <input type="text" name="prenom" required/>
                    </div>
                </div>
                <div class="saisies">
                    <div class="nom_saisies">
                        <p>Votre nom :</p>
                    </div>
                    <div class="sais">
                       <input type="text" name="nom" required/>
                    </div>
                </div>
                <div class="saisies">
                    <div class="nom_saisies">
                        <p>Votre mot de passe :</p>
                    </div>
                    <div class="sais">
                        <input type="password" name="mdp" required/>
                    </div>
                </div>
                <div class="saisies">
                    <div class="nom_saisies">
                        <p>Votre âge :</p>
                    </div>
                    <div class="sais">
                        <input type="integer" name="âge" required/>
                    </div>
                </div>
                <div class="saisies">
                    <div class="nom_saisies">
                        <p>Votre pseudo :</p>
                    </div>
                    <div class="sais">
                        <input type="text" name="pseudo" required/>
                    </div>
                </div>
                <div class="btn_envoi">
                    <input type="submit" value="S'incrire">
                </div>
            </form>
        </div>
    </div>
</div>