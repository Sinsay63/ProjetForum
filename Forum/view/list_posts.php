<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
         <label> 
            <?php 
            foreach ($resultes as $result) {
                echo $result['Pseudo'].' - '.$result['Titre'].' - '.$result['Contenu'].'<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';  
            }  
            ?>
         </label>
    </body>
</html>