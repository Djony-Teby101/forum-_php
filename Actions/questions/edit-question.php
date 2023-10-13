<?php
require('Actions/users/config.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['title'])AND !empty($_POST['description'])
    AND !empty('content')){
        
        $new_question_titre=strip_tags($_POST['title']);
        $new_question_description=nl2br(strip_tags($_POST['description']));
        $new_question_content=nl2br(strip_tags($_POST['content']));

        $sql='UPDATE questions SET titre=?, description=?, contenu=? WHERE id=?';
        $editQuestion=$dbb->prepare($sql);
        // executé la requete  suivant l'ordre des entrees de la requete sql.
        $editQuestion->execute(array($new_question_titre,$new_question_description,$new_question_content,$idquestion));
        header('location: my_question.php');

    }else{
        $errormsg='Veuillez completer tous les champs';
    }
}

?>