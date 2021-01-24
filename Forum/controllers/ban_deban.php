<?php
if(isset($_GET['bid'])){
    $id=$_GET['bid'];
    require("../models/connexion.php");
    require ('../models/ls_users.php');
    require('../models/ban_user.php');
    header("location: ../index.php?page=list_user");
}
else if(isset($_GET['did'])){
    $id=$_GET['did'];
    require("../models/connexion.php");
    require ('../models/ls_users.php');
    require('../models/deban_user.php');
    header("location: ../index.php?page=list_user");
}
