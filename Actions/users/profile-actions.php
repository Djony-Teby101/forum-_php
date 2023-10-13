<?php

require('Actions/users/config.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfUser=$_GET['id'];

    $sql="SELECT pseudo, nom, prenom FROM users WHERE id=?";
    $checkUserExists=$dbb->prepare($sql);
    $checkUserExists->execute(array($idOfUser));

    // Verifier si l'utilisateur existe.
    if($checkUserExists->rowCount()>0){
        $usersInfos=$checkUserExists->fetch();

        $user_pseudo=$usersInfos['pseudo'];
        $user_lastname=$usersInfos['nom'];
        $user_firstname=$usersInfos['prenom'];

        $getHisQuestions=$dbb->prepare('SELECT * FROM questions WHERE id_auteur=? ORDER BY id DESC');
        $getHisQuestions->execute(array($idOfUser));
        
        // $usersQuestionsInfos=$getHisQuestions->fetch();


    }else{
        $errormsg="Aucun utilisateur n'a été trouvé";
    }

}else{
    $errormsg="Aucun utilisateur trouvée";
}
?>