<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/ls_users.css"/>
    </head>
    <body>
        <div class="page_users_container">
            <div class="Users">
                <div class="user">
                <h1 class="titre_page_users">LISTE UTILISATEURS</h1>
        <?php 
        foreach ($users as $value) { ?> 
            <?php if($value['Ban']==1){
                ?>
                <div class="deban">
                    <p class="pseudo"><?php echo $value['Pseudo']; ?></p>  
                    <div class="unban">
                        <div class="btn_unban">
                            <button type="button" class="button_unban"><a href="controllers/ban_deban.php?did=<?php echo $value['ID'];  ?>"/>Débannir</a></button> 
                        </div>
                        <p class="raison">Raison du ban:</p>
                        <p class="raison"> <?php echo $value['Raison_Ban']; ?></p>
                    </div>
                </div>
    <?php   }
            else { 
                date_default_timezone_set('Europe/Paris');
                 $date = date('20y-m-d');
                 $heure = date('H:i');
                ?>
                <div class="ban">
                    <div class="pseudo">
                            <?php  echo $value['Pseudo'];  ?>
                    </div>
                    <div class="def_ban">
                        <p class="noms_ban">Ban à vie: </p>
                        <form class="form_ban_def" action="controllers/ban_deban.php?bid=<?php echo $value['ID'];?>" method="post">
                            <div class="form_def">
                                <p class="raison">Raison du ban: </p>
                                <div class="input_def">
                                    <input  type="text" class="txt_area2" name="raison_ban_def" placeholder="Entrez la raison du ban" maxlength="25" required>
                                    <input class="button_ban_def" type="submit" value="Bannir">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="temp_ban">
                        <p class="noms_ban"> Ban temporaire: </p>
                        <form class="form_temp_ban" action="controllers/ban_deban.php?btid=<?php echo $value['ID']; ?>" method="post">
                            <div class="form_temp">
                                <p class="durée">Durée du ban:</p>
                                <div class="input_temp">
                                <input type="datetime-local" class="txt_area" name="dateheure" min="<?php echo $date.'T'.$heure;?>" required>
                                <p class="raison">Raison du ban: </p>
                                <input type="text" class="txt_area2" name="raison_ban_temp" placeholder="Entrez la raison du ban" maxlength="45" required >
                                <input class="button_ban_def"type="submit" value="Bannir">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    <?php   }
  }
        ?>
                </div>
            </div>
        </div>
    </body>
</html>

