<?php
require_once('config.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo'])AND !empty($_POST['lastname'])
        AND !empty($_POST['firstname'])
        AND !empty($_POST['password'])){
            
            $user_pseudo= strip_tags($_POST['pseudo']);
            $user_lastname=strip_tags($_POST['lastname']);
            $user_firstname=strip_tags($_POST['firstname']);
            $user_password=password_hash($_POST['password'], PASSWORD_DEFAULT);


            $sql='SELECT * FROM users WHERE pseudo=?';
            $checkIfUserAlreadyExists=$dbb->prepare($sql);
            $checkIfUserAlreadyExists->execute(array($user_pseudo));

            if($checkIfUserAlreadyExists->rowCount()==0){
                $sql='INSERT INTO users(pseudo,nom,prenom,mdp)
                    VALUES(?, ?, ?, ?)';
                
                $insertUserOnsite=$dbb->prepare($sql);
                $insertUserOnsite->execute(array($user_pseudo,
                            $user_lastname,
                            $user_firstname,
                            $user_password));

                // authentification Session.
                $sql='SELECT id, pseudo, nom, prenom FROM users WHERE nom=? AND prenom=? AND pseudo=?';
                $getInfosUserReq=$dbb->prepare($sql);
                $getInfosUserReq->execute(array($user_lastname,$user_firstname,$user_pseudo));
                
                $userInfos=$getInfosUserReq->fetch();
                $_SESSION['auth']=true;
                $_SESSION['id']=$userInfos['id'];
                $_SESSION['lastname']=$userInfos['nom'];
                $_SESSION['firstname']=$userInfos['prenom'];
                $_SESSION['pseudo']=$userInfos['pseudo'];
                header('location: index.php');


            }else{
                $errormsg="L'utilisateur existe deja sur le site";
            }
            

        } else{
            $errormsg="Veuillez remplir tous les champs...";
        }
}
?>