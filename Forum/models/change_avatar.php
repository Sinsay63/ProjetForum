<?php
    $dossier = 'view/images/'; 
    $file = basename($_FILES['avatar']['name']);
    $taille_maxi = 10000000;
    $taille = filesize($_FILES['avatar']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');
    $erreur=0;
    if(!in_array($extension, $extensions))  {
       header("Location: index.php?page=profil&chg_profil=5");  
    } 
    if($taille>$taille_maxi) {
        header("Location: index.php?page=profil&chg_profil=6");  
    } 
    if($erreur==0) {          
        $fich = strtr($file,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fich);
        
        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) {
            $upload=$bdd->prepare("UPDATE logins SET Avatar_Path = ? WHERE id = ?");
            $upload->execute(array($dossier.$fichier,$_SESSION['ID']));
            $_SESSION['Avatar']=$dossier.$fichier;
            header('location: index.php');
        }
        else {
           header("Location: index.php?page=profil&chg_profil=7");
        }
    }