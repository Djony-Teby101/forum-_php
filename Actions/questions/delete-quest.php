<?php
require('../users/config.php');
// verifie si l'utilisateur est bien authentifié.
if(!isset($_SESSION['auth'])){
    header('location: ../../login.php');
};


if(isset($_GET['id']) AND !empty($_GET['id'])){
    $idOfQuestion=$_GET['id'];
    $sql='SELECT id_auteur FROM questions WHERE id=?';

    $checkIdQuestionExist=$dbb->prepare($sql);
    $checkIdQuestionExist->execute(array($idOfQuestion));
    
    if($checkIdQuestionExist->rowCount()>0){
        $usersInfos=$checkIdQuestionExist->fetch();
        if($usersInfos['id_auteur']== $_SESSION['id']){

            $sql="DELETE FROM questions WHERE id=?";
            $deleteThisQuestion=$dbb->prepare($sql);
            $deleteThisQuestion->execute(array($idOfQuestion));
            header('location: ../../my_question.php');
        }else{
            echo("Vous n'avez pas les droits d'effectuer cette action.");
        }
        
    }else{
        $errormsg="Aucun question n'a été trouvée";
        echo($errormsg);
    }

}else{
    $errormsg="Aucun question n'a été trouvée";
    echo($errormsg);
}
?>