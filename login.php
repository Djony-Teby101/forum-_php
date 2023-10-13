<?php
require_once('Actions/users/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('Includes/head.php') ?>
    <title>Connexion</title>
</head>
<body>
<br><br>
    <form class="container" method="post">

    <?php  
        if(isset($errormsg)){
            echo '<p>'.$errormsg.'</p>';
        }    
    ?>
        <div class="mb-3">
            <label for="" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        
        <a href="sign-up.php"><p>j'ai pas de comptes</p></a>
        <button type="submit" class="btn btn-primary" name="validate">Connexion</button>
    </form>
</body>
</html>