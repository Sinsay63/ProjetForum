<?phprequire ('../models/connexion.php');
require('../models/delete_post.php');
delete($bdd);
header('location: index.php');