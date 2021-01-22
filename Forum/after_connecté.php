<?php
require('models/connexion.php');
require("models/sql_login.php");
if($log>0){
    header("Location: view/pageconnex.php");
}