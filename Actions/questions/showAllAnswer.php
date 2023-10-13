<?php

require('Actions/users/config.php');

$sql='SELECT id_auteur,pseudo_auteur, id_question, contenu FROM answers WHERE id_question= ?';
$getAllAnswers=$dbb->prepare($sql);
$getAllAnswers->execute(array($idQuestion));

$getAllAnswers->fetch();
?>