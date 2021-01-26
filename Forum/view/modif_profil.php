<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/modif_profil.css"/>
    </head>
    <body>
        <div>
            <p>VOTRE PROFIL:</p>
        </div>
        <?php 
        if(isset($_GET['chg_profil'])){
            $err=$_GET['chg_profil'];
        }
        foreach ($infos as $value) {?>
        <div class="avatar">
            <p>Votre avatar :</p><img src="<?php echo $value['Avatar_Path'];?>" class="pp_avatar">
            <div class="ava_droite">
                <p id="tx_ava">Nouvel avatar? Cliquez sur un : </p>
                <div class="choix_avatars">
                <?php  
                $url1="view/images/administrateur.png";
                $url2="view/images/user.png";
                $url3="view/images/utilisateur.png";
                $url4="view/images/utilisatrice.png";
                $url5="view/images/user-female.png";
                if($_SESSION['Avatar']== $url1){
                    $avatar=[$url2,$url3,$url4,$url5];
                }
                if($_SESSION['Avatar']== $url2){
                    if($_SESSION['IsAdmin']==1){
                        $avatar=[$url1,$url3,$url4,$url5];
                    }
                    else{
                    $avatar=[$url3,$url4,$url5];
                }
                }
                if($_SESSION['Avatar']== $url3){
                    if($_SESSION['IsAdmin']==1){
                        $avatar=[$url1,$url2,$url4,$url5];
                }
                else{
                    $avatar=[$url2,$url4,$url5];
                }
                }
                if($_SESSION['Avatar']== $url4){
                    if($_SESSION['IsAdmin']==1){
                        $avatar=[$url1,$url2,$url3,$url5];
                    }
                    else{
                    $avatar=[$url2,$url3,$url5];
                }
                }
                if($_SESSION['Avatar']== $url5){
                    if($_SESSION['IsAdmin']==1){
                        $avatar=[$url1,$url2,$url3,$url4];
                    }
                    else{
                    $avatar=[$url2,$url3,$url4];
                }
                }
                
                foreach ($avatar as $pp_profil) {  ?>
                    <a href="index.php?page=new_avatar&url=<?php echo $pp_profil;  ?>"><img class="pp_avatar2" src="<?php echo $pp_profil;  ?>" alt=""/></a>
        <?php   }
                ?>
                
                    
                </div>
            </div>
    	</div>
        <form action="index.php?page=modif_profil" method="post">
            <div>
                <p> Votre pseudo: <?php echo $value['Pseudo']; ?> </p>
                <div>
                    <div style="padding-top:8px;"><input type="text" name="new_username" placeholder="Nouveau pseudo" minlength="4" maxlength="15" required/></div>
                </div>
                <div style="padding-top:20px;">
                    <input type="submit" value="Changer">
                </div>
            </div>
            </form>
            <form action="index.php?page=modif_profil" method="post">
            <div>
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
                <div>
                    <div style="padding-top:8px;"><input type="password" name="old_password" placeholder="Ancien mot de passe" minlength="5" required/></div>
                    <div style="padding-top:8px;"><input type="password" name="new_password" placeholder="Nouveau mot de passe" minlength="5" required/></div>
                    <div style="padding-top:8px;"><input type="password" name="new_password2" placeholder="Confirmez mot de passe" minlength="5" required/></div>
                </div>
                <div style="padding-top:20px;">
                    <input type="submit" value="Changer">
                </div>
            </div>
                </form>
                <form action="index.php?page=modif_profil" method="post">
            <div>
                <p> Votre e-mail :  <?php echo $value['Email']; ?> </p>
                <?php 
                if((isset($err))){
                    if ($err==3){
                        $message="Le format de l'email est incorrect."; ?>
                        <p class='errorMessage2'><?php echo $message; ?></p>
            <?php   }
                }  ?>
                <input type="text" name="new_email" placeholder="Nouvelle adresse email" required/>
            </div>
            <div style="padding-top:20px;">
                <input type="submit" value="Changer">
            </div>
        </form>
        <?php } ?>
    </body>
</html>