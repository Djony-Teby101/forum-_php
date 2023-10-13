<?php
require('Actions/users/config.php');

if(isset($_POST['validate'])){
    if(isset($_POST['answer'])){
        $user_answer=nl2br(strip_tags($_POST['answer']));

        $sql='INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu)VALUES(?, ?, ?, ?)';

        $insertAnswer=$dbb->prepare($sql);
        $insertAnswer->execute(array($_SESSION['id'],$_SESSION['pseudo'],$idQuestion,$user_answer));
    }
}
?>