<?php
require('Actions/users/config.php');

// vérifier si la question existe.
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idQuestion=$_GET['id'];
    $checkifQuestionExist=$dbb->prepare('SELECT* FROM questions WHERE id=?');
    $checkifQuestionExist->execute(array($idQuestion));

    if($checkifQuestionExist->rowCount()>0){

        // Récuperer toutes les datas de la questions.
        $questionsInfos=$checkifQuestionExist->fetch();

        // stocker les datas de la questions.
        $question_title=$questionsInfos['titre'];
        $question_description=$questionsInfos['description'];
        $question_content=$questionsInfos['contenu'];
        $question_id_author=$questionsInfos['id_auteur'];
        $question_pseudo_auteur=$questionsInfos['pseudo'];
        $question_date_publication=$questionsInfos['date_publication'];




    }else{
        $errormsg="Aucune question n'a été trouvée";
    }
}else{
    $errormsg="Aucune question n'a été trouvée";
}
?>