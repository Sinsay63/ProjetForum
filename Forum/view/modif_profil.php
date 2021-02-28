<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/modif_profil.css"/>
    </head>
    <body>
        <div class="background">
            <div class="main_box">
                <div class="left">
                    <?php 
                    if(isset($_GET['chg_profil'])){
                        $err=$_GET['chg_profil'];
                    }
                    foreach ($infos as $value) {  ?>
                        <div class="avatar">
                            <div class="img_avatar">
                                <img src="<?php echo $value['Avatar_Path'];?>" class="pp_avatar">
                            </div>
                            <?php 
                            if(isset($err)){
                                if ($err==5){
                                        $message="Le format de l'image est incorrect."; ?>
                                        <div class="errorMessage2">
                                            <p><?php echo $message; ?></p>
                                        </div>
                            <?php   }
                                    else if($err==6){
                                        $message="La taille de l'image est trop grande."; ?>
                                        <div class="errorMessage2">
                                            <p><?php echo $message; ?></p>
                                        </div>
                            <?php   }
                             else if($err==7){
                                        $message="Une erreur lors de l'upload est survenue."; ?>
                                        <div class="errorMessage2">
                                            <p><?php echo $message; ?></p>
                                        </div>
                            <?php   }
                            }
                            ?>
                            <form class="choix_avatars" action="index.php?page=new_avatar" method="post" enctype="multipart/form-data">
                                <input class="revert" type="file" name="avatar" id="fileUpload" hidden>
                                <label class="choix_fichier_avatar" for="fileUpload">Choisir un fichier</label>
                                <input class="revert" type="submit" name="submit" id="upload" value="Upload" hidden/>
                                <label class="validation_avatar" for="upload">Modifier</label>   
                            </form>
                        </div>
                        <form class="modif_mdp" action="index.php?page=modif_profil" method="post">
                            <div class="mdp_container">
                                <p class="text_modif_mdp"> Changer votre mot de passe : </p>
                                 <?php 
                                    if((isset($err))){
                                        if ($err==1){
                                            $message="Le mot de passe est incorrect."; ?>
                                            <div class="errorMessage2">
                                                <p><?php echo $message; ?></p>
                                            </div>
                                <?php   }
                                        else if($err==2){
                                            $message="Les mots de passe sont différents."; ?>
                                            <div class="errorMessage2">
                                                <p><?php echo $message; ?></p>
                                            </div>
                                <?php   }
                                else if($err==3){
                                            $message="L'ancien mot de passe et le nouveau correspondent."; ?>
                                            <div class="errorMessage2">
                                                <p><?php echo $message; ?></p>
                                            </div>
                                <?php   }
                                    }   ?>
                                <div class="mdp_box_container">
                                    <input class="mdp_box" type="password" name="old_password" placeholder="Ancien mot de passe" minlength="3" required/>
                                    <input class="mdp_box" type="password" name="new_password" placeholder="Nouveau mot de passe" minlength="3" required/>
                                    <input class="mdp_box" type="password" name="new_password2" placeholder="Confirmez mot de passe" minlength="3" required/>
                                </div>
                            </div>
                            <div class="validation">
                                <input class="btn_validation" type="submit" value="Modifier">
                            </div>
                        </form>
                        </div>
                        <div class="right">
                            <div class="modif_pseudo">
                                <div class="votre_pseudo">
                                    <div class="username">
                                        <p class="username1">Votre pseudo :  </p>
                                        <p class="username2"><?php echo $value['Pseudo']; ?> </p>
                                    </div>
                                </div> 
                                <form class="pseudo" action="index.php?page=modif_profil" method="post">
                                    <div class="choix_pseudo">
                                        <input class="box_modif_pseudo" type="text" name="new_username" placeholder="Nouveau pseudo" minlength="4" maxlength="15" required/>
                                        <input class="bouton_modif_pseudo" type="submit" value="Modifier">
                                    </div>
                                </form>
                            </div>   
                            <form class="mail" action="index.php?page=modif_profil" method="post">
                                <div class="content_mail">
                                    <div class="mail_container">
                                        <p class="text_modif_mail"> Votre email :   </p>
                                        <p class="text_modif_mail2">  <?php echo $value['Email']; ?> </p>
                                        <?php 
                                        if((isset($err))){
                                            if ($err==4){
                                                $message="Le format de l'email est incorrect."; ?>
                                                <p class='errorMessage2'><?php echo $message; ?></p>
                                    <?php   }
                                        }  ?>
                                        <input class="mail_box" type="text" name="new_email" placeholder="Nouvelle adresse email" required/>
                                        <div class="validation">
                                            <input class="btn_validation_mail" type="submit" value="Modifier">
                                        </div>
                                    </div>
                                </div>
                            </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>