<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="view/css/header.css"/>
    </head>
    <body>
        <h1>LISTE USERS</h1>
        <?php 
        foreach ($users as $value) { 
            echo $value['Pseudo'];  
            if($value['Ban_Vie']==1){   ?>
                <a href="controllers/ban_deban.php?did=<?php echo $value['ID'];  ?>" style="padding-left:10px;" />Débannir</a><br><br> 
    <?php   }
            else {   ?>
                <a href="controllers/ban_deban.php?bid=<?php echo $value['ID'];  ?>" style="padding-left:10px;" />Bannir</a><br><br> 
    <?php   }
  }
        ?>
        
    </body>
</html>

