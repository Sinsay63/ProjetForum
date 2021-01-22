
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/pageconnex.css"/>
    </head>
    <body>
        <div class="form_conn_inscri">  
            <div class="conn_gauche">
                <div class="form">
                    <div class="box">
                        <div class="titreconnex">
                            <h1>Vous avez déjà un compte?</h1>
                        </div>
                        <form class="form_connex" action="../after_connecté.php" method="post">
                                <?php 
                                    if(isset($log)){
                                        $message_co="<p class='errorMessage'>Le nom d'utilisateur ou le mot de passe est incorrect.</p>";
                                    }
                                ?>
                            <div class="champ_saisie">
                                    <div class="saisies">
                                        <div class="nom_saisies"><p>Votre pseudo: </p> </div>
                                        <div class="sais"><input class="border_white" type="text" name="pseudo" required/></div>
                                    </div>
                                    <div class="saisies">
                                        <div class="nom_saisies"> <p>Votre mot de passe :</p></div>
                                        <div class="sais"><input class="border_white" type="password" name="password" required/>  </div>
                                    </div>
                                </div>
                            <div class="btn_envoi">
                                <input class="bouton_left" type="submit" value="Se connecter">
                                <div class="bas">
                                    <input type="checkbox">
                                    <div class="text_bas">
                                        <p> Les cookies nous aident à fournir nos services. En utilisant nos Services ou en cliquant sur J'accepte, vous acceptez notre utilisation des cookies. Apprendre encore plus </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="conn_droite">
                <div class="form2">
                    <div class="box2">
                        <div class="titreconnex">
                            <h1>Création d'un compte.</h1>
                        </div>
                            <?php 
                            if(isset($oui)){
                                if ($oui==1){
                                    $message="<p class='errorMessage'>L'email ou le pseudo est déjà existant.</p>";
                                }
                                else if($oui==2){
                                    $message="<p class='errorMessage'>L'email saisie est incorrecte.</p>";
                                }
                            } ?>
                        <form class="form_connex2" action="../after_inscri.php" method="post">
                            <div class="all_saisie">
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre prénom :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="text" name="prenom" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre nom :</p>
                                    </div>
                                    <div class="sais">
                                       <input class="border_black" type="text" name="nom" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre email :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="text" name="email" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre mot de passe :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="password" name="mdp" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Vérifier votre mot de passe :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="password" name="mdp_conf" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre âge :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="integer" name="âge" required/>
                                    </div>
                                </div>
                                <div class="saisies">
                                    <div class="nom_saisies">
                                        <p>*Votre pseudo :</p>
                                    </div>
                                    <div class="sais">
                                        <input class="border_black" type="text" name="Pseudo" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_envoi">
                                <input class="bouton_right" type="submit" value="S'incrire">
                                <div class="bas">
                                    <div class="text_bas_right">
                                        <p> *Champs obligatoires </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
