<?php 
require('./Actions/users/config.php');
require('./Actions/users/securityAtion.php');

$sql="SELECT id, titre, description FROM questions WHERE id_auteur=? ORDER BY id DESC";

// récuperer l'identifiant de l'utilisateur connecter. 
$getuserid=$_SESSION['id'];

$getallmyquestions=$dbb->prepare($sql);
$getallmyquestions->execute(array($getuserid));

?>
