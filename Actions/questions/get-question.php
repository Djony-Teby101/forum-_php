<?php
    require('Actions/users/config.php');

    if(isset($_GET['id']) AND !empty($_GET['id'])){
        $idquestion=$_GET['id'];
        // écris la requete.
        $sql="SELECT * FROM questions WHERE id=?";
        $checkifQuestionExist=$dbb->prepare($sql);
        $checkifQuestionExist->execute(array($idquestion));

        // verifier s'il ya un resultat
        if($checkifQuestionExist-> rowCount() >0){
            // recuperer les donnees.
            $questionInfos=$checkifQuestionExist->fetch();
            // verifier,le poste a bien ete editer par l'auteur de la session.
            if($questionInfos['id_auteur']==$_SESSION['id']){

                // recupere les donnees.
                $question_title=$questionInfos['titre'];
                $question_description=$questionInfos['description'];
                $question_content=$questionInfos['contenu'];
                $question_date=$questionInfos['date_publication'];

                // Otez les balises <br /> dans les champs à modifier.
                $question_description=str_replace('<br />','',$question_description);
                $question_content=str_replace('<br />','',$question_content);

            }else{
                $errormsg="Vous n'etes pas l'auteur de cette question";
                header('location: my_question.php');
            }

        }else{
            $errormsg="Aucune question n'a été trouvée !";
        }


    }else{
        $errormsg="Aucune question trouvée !";
    }
?>