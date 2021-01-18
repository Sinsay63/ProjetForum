<?php
require('models/connexion.php');
require('view/header.php');
require("models/sql_inscri.php");
if ($oui>0){
    require('view/inscri_error.php');
}
