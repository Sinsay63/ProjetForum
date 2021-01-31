<?php

if (isset($_POST['pseudo'])){
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
  
    $reponse = $bdd->prepare("SELECT * FROM `logins` WHERE Pseudo= ? and Password= ?");
    $reponse->execute(array($username,hash('sha256',$password)));
    $result=$reponse->fetch();
  
    if($result==true){
        $id=$result['ID'];
        $reponss = $bdd->prepare("SELECT * FROM `ban` WHERE ID_auteur =?");
        $reponss->execute(array($id));
        $banni=$reponss->fetchAll();

        foreach ($banni as $ban) {
            $bandef=$ban['Ban_Vie'];
            $tempban=$ban['Durée_Ban'];
            $raisban=$ban['Raison_Ban']; 
            $ban_id=$ban['ID'];
        }
        
        if($bandef==1){
            header("Location: index.php?page=page_connexion&error=0&rais='$raisban'");
        }
        
        if(!empty($tempban)){
            $rep=$bdd->prepare("SELECT TIMESTAMPDIFF(SECOND,NOW(), Durée_Ban) from ban WHERE id= ?");
            $rep->execute(array($ban_id));
            $durée=$rep->fetchAll();
            $années=0;
            $jours=0;
            $heures=0;
            $minutes=0;
            foreach ($durée as $dh) {
                $secondes=$dh[0];
            }
            while($secondes>60){
                $res= intdiv($secondes,60);
                $minutes=$res+$minutes;
                $secondes=$secondes-($res*60);
            }
            
            while($minutes>60){
                $res= intdiv($minutes,60);
                $heures=$res+$heures;
                $minutes=$minutes-($res*60);
                
            }
            while($heures>23){
                $res=intdiv($heures,24);
                $jours=$res+$jours;
                $heures=$heures-($res*24);
            }
            while($jours>=365){
                $res=intdiv($jours,365);
                $années=$res+$années;
                $jours=$jours-($rep*365);
            }
            header("location: index.php?page=page_connexion&error=6&tempa=$années&tempj=$jours&temph=$heures&tempm=$minutes&temps=$secondes");
            }
        
        
        else if ($ban==0){
            $_SESSION['pseudo'] = $username;
            $_SESSION['ID']=$result['ID'];
            $_SESSION['IsAdmin']=$result['IsAdmin'];
            $_SESSION['Avatar']=$result['Avatar_Path'];
            header("Location: index.php");
        }
    }
    else {
        header("Location: index.php?page=page_connexion&error=1");
    }
}
