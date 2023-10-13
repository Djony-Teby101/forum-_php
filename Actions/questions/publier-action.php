<?php
require('Actions/users/config.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['title']) AND !empty('description') 
    AND !empty($_POST['content'])){

        // recuperer les données.
        $question_title=strip_tags($_POST['title']);
        $question_description=nl2br(strip_tags($_POST['description']));
        $question_content=nl2br(strip_tags($_POST['content']));
        $question_date=date('d/m/Y');

        // Recuperer les valeur issue de la session.
        $question_id_author=$_SESSION['id'];
        $question_pseudo_author=$_SESSION['pseudo'];

        // Inserer les valeurs dans la table.
        $sql="INSERT INTO questions (titre, description, contenu, id_auteur, pseudo, date_publication)
        VALUES (?, ?, ?, ?, ?, ?)";
        $insertquestion=$dbb->prepare($sql);
        $insertquestion->execute(array($question_title,$question_description,$question_content,
        $question_id_author,$question_pseudo_author,$question_date));
        
       $successMsg=" Votre question à bien été posté !";
    }else{
        $errormsg="Veuillez remplir tous les champs...";
    }
}
?>