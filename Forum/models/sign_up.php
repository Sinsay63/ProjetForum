<?php

            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['mail']);
            $âge = htmlspecialchars($_POST['âge']);
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = sha1(htmlspecialchars($_POST['mdp']));
            $infos=[$email,$mdp,$prenom,$nom,$pseudo,$âge];
            $reponse = $bdd->prepare('INSERT INTO logins(Email,Password,Prénom,Nom,Pseudo,Age) VALUES (?,?,?,?,?,?)');
            $reponse->execute(array($infos[0],$infos[1],$infos[2],$infos[3],$infos[4],$infos[5]));
            