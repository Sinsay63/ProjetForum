<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/"/>
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
    	<div>
            <button class="modif_avatar">changer mon avatar</button>
    	</div>
        <form action="index.php?page=modif_profil" method="post">
            <div>
                <p> Votre pseudo: <?php echo $value['Pseudo']; ?> </p>
                <div>
                    <div style="padding-top:8px;"><input type="text" name="new_username" placeholder="Nouveau pseudo" minlength="4" required/></div>
                </div>
                <div style="padding-top:20px;">
                    <input type="submit" value="Changer">
                </div>
            </div>
            </form>
            <form action="index.php?page=modif_profil" method="post">
            <div>
                <p> Votre mot de passe : </p>
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
                    <div style="padding-top:8px;"><input type="password" name="old_password" placeholder="Ancien mot de passe" required/></div>
                    <div style="padding-top:8px;"><input type="password" name="new_password" placeholder="Nouveau mot de passe" required/></div>
                    <div style="padding-top:8px;"><input type="password" name="new_password2" placeholder="Confirmez mot de passe" required/></div>
                </div>
                <div style="padding-top:20px;">
                    <input type="submit" value="Changer">
                </div>
            </div>
                </form>
                <form action="index.php?page=modif_profil" method="post">
            <div>
                <p> Votre E-mail :  <?php echo $value['Email']; ?> </p>
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