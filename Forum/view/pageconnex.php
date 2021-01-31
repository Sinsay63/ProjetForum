
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/pageconnex.css"/>
    </head>
    <body>
        <?php
            if(isset($_GET['error'])){
                $error=$_GET['error'];
            }
        ?>
        <div class="form_conn_inscri">  
            <div class="conn_gauche">
                <div class="form">
                    <div class="box">
                        <form class="form_connex" action="index.php?page=connexion" method="post">
                            <div class="titreconnex">
                                <h1>Déja utilisateur?</h1>
                            </div>
                                <?php 
                                    if(isset($error)){
                                        if ($error==1){
                                            $message="Le nom d'utilisateur ou le mot de passe est incorrect."; ?>
                                            <p class='errorMessage'><?php echo $message; ?> </p>
                                <?php   }
                                        else if($error==0){
                                            if(isset($_GET['rais'])){
                                                $message="Votre compte est banni à vie. Raison : ".$_GET['rais'];
                                                ?>
                                                <p class='errorMessage'><?php echo $message; ?> </p>
                                <?php   
                                            }
                                        }
                                        else if($error==6){
                                            if(isset($_GET['tempa'])){
                                                ?>
                                                <p class='errorMessage'>Votre compte est temp ban. Durée restante: </p>
                                                <p class='errorMessage1'> <?php echo $_GET['tempa'].' an '.$_GET['tempj'].' jours '.$_GET['temph'].' heures '.$_GET['tempm'].' minutes '.$_GET['temps'].' secondes';
                                                ?> </p>
                                <?php       }
                                        }
                                    } 
                                    ?>
                                <div class="champ_saisie">
                                    <div class="saisies">
                                        <div class="sais"><input class="border_white" type="text" name="pseudo" placeholder="Pseudo" required/></div>
                                    </div>
                                    <div class="saisies">
                                        <div class="sais"><input class="border_white" type="password" name="password" placeholder="Mot de passe"required/>  </div>
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
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="conn_droite">
                <div class="form2">
                    <div class="box2">
                        <div class="titreconnex">
                            <h1>Création d'un compte.</h1>
                        </div>
                        <?php 
                            if((isset($error))){
                                if ($error==2){
                                    $message="L'email saisie est incorrecte."; ?>
                                    <div><p class='errorMessage2'><?php echo $message; ?></p></div>
                        <?php   }
                                else if($error==3){
                                    $message="L'email ou le pseudo est déjà existant."; ?>
                                    <div><p class='errorMessage2'><?php echo $message; ?></p></div>
                        <?php   }
                             
                                else if($error==4){
                                    $message="Les mots de passe sont différents."; ?>
                                    <div><p class='errorMessage2'><?php echo $message; ?></p></div>
                        <?php   } 
                            }?>
                        <form class="form_connex2" action="index.php?page=inscription" method="post">
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
