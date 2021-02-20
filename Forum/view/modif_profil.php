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
                            <div class="ava_droite">
                                <?php 
                                if(isset($err)){
                                    if ($err==5){
                                            $message="Le format de l'image est incorrect."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                        else if($err==6){
                                            $message="La taille de l'image est trop grande."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                 else if($err==7){
                                            $message="Une erreur lors de l'upload est survenue."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                }
                                ?>
                                <div class="choix_avatars">
                                    <form action="index.php?page=new_avatar" method="post" enctype="multipart/form-data">
                                        <div class="lien_modif_avatar">
                                            <p> Modifier mon avatar </p>
                                            <input type="file" name="avatar" id="fileUpload">
                                            <input type="submit" name="submit" value="Upload">
                                        </div>               
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form class="modif_mdp" action="index.php?page=modif_profil" method="post">
                            <div class="mdp_container">
                                <p> Changer votre mot de passe : </p>
                                 <?php 
                                    if((isset($err))){
                                        if ($err==1){
                                            $message="Le mot de passe est incorrect."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                        else if($err==2){
                                            $message="Les mots de passe sont différents."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                else if($err==3){
                                            $message="L'ancien mot de passe et le nouveau correspondent."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                    }   ?>
                                <div class="mdp_box_container">
                                    <input class="mdp_box" type="password" name="old_password" placeholder="Ancien mot de passe" minlength="5" required/>
                                    <input class="mdp_box" type="password" name="new_password" placeholder="Nouveau mot de passe" minlength="5" required/>
                                    <input class="mdp_box" type="password" name="new_password2" placeholder="Confirmez mot de passe" minlength="5" required/>
                                </div>
                                <div style="padding-top:20px;">
                                    <input type="submit" value="Changer">
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="right">
                            <form class="pseudo" action="index.php?page=modif_profil" method="post">
                                <div class="pseudo">
                                    <p> Votre pseudo: <?php echo $value['Pseudo']; ?> </p>
                                    <div>
                                        <div><input type="text" name="new_username" placeholder="Nouveau pseudo" minlength="4" maxlength="15" required/></div>
                                    </div>
                                    <div>
                                        <input type="submit" value="Changer">
                                    </div>
                                </div>
                            </form>
                            <form class="mail" action="index.php?page=modif_profil" method="post">
                                <div class="mail_container">
                                    <p> Votre e-mail :  <?php echo $value['Email']; ?> </p>
                                    <?php 
                                    if((isset($err))){
                                        if ($err==4){
                                            $message="Le format de l'email est incorrect."; ?>
                                            <p class='errorMessage2'><?php echo $message; ?></p>
                                <?php   }
                                    }  ?>
                                    <input class="mail_box" type="text" name="new_email" placeholder="Nouvelle adresse email" required/>
                                    <div style="padding-top:20px;">
                                        <input type="submit" value="Changer">
                                    </div>
                                </div>
                            </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>