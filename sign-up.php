<?php
    require_once('Actions/users/sign-up.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include('Includes/head.php') ?>
    <title>Sign-up</title>
    <style>
        
    </style>
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
            <label for="" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname">
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstname">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <a href="login.php"><p>j'ai déja un compte</p></a>
        <button type="submit" class="btn btn-primary" name="validate">S'inscire</button>
    </form>
</body>


</html>