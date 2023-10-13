<?php
require('config.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
        

        // Les données de l'user.
        $user_pseudo=strip_tags($_POST['pseudo']);
        $user_password=strip_tags($_POST['password']);


        $sql='SELECT * FROM users WHERE pseudo=?';
        $checkIfUserExists=$dbb->prepare($sql);
        $checkIfUserExists->execute(array($user_pseudo));

        // vérifie si l'utilisateur existe dans la dbase.
        if($checkIfUserExists->rowCount()>0){

            // recup les infos de l'utilisateur en dbase.
            $userInfos=$checkIfUserExists->fetch();
            $user_hash_pass=$userInfos['mdp'];

            // verifier si le mots de passe est correct.
            if(password_verify($user_password,$user_hash_pass )){

                // Auth de l'utilisateur sur le site et recup des données.
                $_SESSION['auth']=true;
                $_SESSION['id']=$userInfos['id'];
                $_SESSION['lastname']=$userInfos['nom'];
                $_SESSION['firstname']=$userInfos['prenom'];
                $_SESSION['pseudo']=$userInfos['pseudo'];

                // redirige l'utilisateur vers la page d'acceuil.
                header('location: index.php');
            }else{
                $errormsg="Votre pseudo/et ou password est incorrect !";
            }
           }
        }else{
            $errormsg="Votre pseudo est incorrect...";
        }

    }else{
        $errormsg=" Veuillez completer tous les champs... ";
    }


?>