<?php
require('Actions/users/securityAtion.php');
require('Actions/questions/publier-action.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('Includes/head.php') ?>
    <title>publication</title>
</head>
<body>
    <?php  include('Includes/navbar.php'); ?>

<br><br>
    <form class="container" method="post">
    <?php  
        if(isset($errormsg)){
            echo '<p>'.$errormsg.'</p>';
        }elseif(isset($successMsg)){
            echo '<p>'.$successMsg.'</p>';
        }
    ?>
        <div class="mb-3">
            <label for="" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Déscription de la question</label>
            <textarea class="form-control" name="description"></textarea>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">contenu de la question</label>
            <textarea class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
    </form>
</body>
</html>