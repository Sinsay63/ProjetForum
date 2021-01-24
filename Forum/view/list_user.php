<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/ls_users.css"/>
    </head>
    <body>
        <h1>LISTE USERS</h1>
        <?php 
        foreach ($users as $value) { ?> 
            <?php if($value['Ban']==1){
                echo $value['Pseudo'];?>  <a href="controllers/ban_deban.php?did=<?php echo $value['ID'];  ?>" style="padding-left:10px; padding-bottom: 15px;" />Débannir</a>
                <?php echo 'Raison du ban: '.$value['Raison_Ban']; ?><br><br>
    <?php   }
            else { 
                date_default_timezone_set('Europe/Paris');
                 $date = date('20y-m-d');
                 $heure = date('H:i');
                ?>
                <div style="display:flex;padding-bottom: 15px; padding-top: 20px;">
                    <div style="width:80px;"><?php  echo $value['Pseudo'];  ?></div>
                    <form action="controllers/ban_deban.php?bid=<?php echo $value['ID'];?>" style="display: flex;" method="post">
                        <p style="padding-right: 15px; padding-left: 15px;">Raison du ban: </p>
                        <input  type="text" class="txt_area2" name="raison_ban_def" maxlength="45" required>
                        <input  style="margin-left: 15px;" type="submit" value="Ban Def">
                    </form>
                </div>
                    <form action="controllers/ban_deban.php?btid=<?php echo $value['ID']; ?>" style="display: flex; padding-left:80px;" method="post">
                        <p style="padding-right: 15px; padding-left: 15px;">Durée du ban:</p>
                        <input type="datetime-local" class="txt_area" name="dateheure" min="<?php echo $date.'T'.$heure;?>" required>
                         <p style="padding-right: 15px; padding-left: 15px;">Raison du ban: </p>
                         <input  type="text" class="txt_area2" name="raison_ban_temp" maxlength="45" required >
                              
                        <input  style="margin-left: 15px;" type="submit" value="TempBan">
                    </form>
                <br><br>
    <?php   }
  }
        ?>
    </body>
</html>

