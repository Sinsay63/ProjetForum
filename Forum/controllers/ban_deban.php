<?php
if(isset($_GET['bid'])){
    $id=$_GET['bid'];
    $raisons= htmlspecialchars($_POST['raison_ban_def']);
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
else if(isset($_GET['btid'])){
    $id=$_GET['btid'];
    $raison= htmlspecialchars($_POST['raison_ban_temp']);
    require('../models/connexion.php');
    require('../models/ls_users.php');
    require("../models/tempban.php");
    header("location: ../index.php?page=list_user");
}
else if(isset($_GET['opid'])){
    $id=$_GET['opid'];
    require('../models/connexion.php');
    require('../models/ls_users.php');
    require("../models/put_admin.php");
    header("location: ../index.php?page=list_user");
}
