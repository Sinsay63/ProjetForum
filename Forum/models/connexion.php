<?php

    $dsn = 'mysql:host=localhost;dbname=forum';
    $user = 'root';
    $password = '';
    try {
        $bdd = new PDO($dsn,$user,$password);

    }
    catch(PDOException $e)
    {
        die('erreur : '.$e->getMessage());
    }
    $reP = $bdd->query("select ID,Durée_Ban from ban");
    $tban = $reP->fetchAll();
    
         foreach ($tban as $value) {
            if(isset($value['Durée_Ban'])){
                $date = date('20y-m-d H:i:s');
                if($value['Durée_Ban']<=$date ){
                    $idb=$value['ID'];
                    $repon = $bdd->prepare('delete from ban where ID= ?');
                    $repon->execute(array($idb));
                }
            }
        }
    ?>