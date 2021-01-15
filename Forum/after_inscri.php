<?php

require ('models/connexion.php');
require('view/header.php');
require('models/search_all_posts.php');
$resultes=search_all_post($bdd);
require('view/list_posts.php');
require ('models/sign_up.php');
echo 'Vous êtes inscrit.';
require('view/footer.php');

