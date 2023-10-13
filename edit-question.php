<?php
require('Actions/users/securityAtion.php');
require('Actions/questions/get-question.php');
require('Actions/questions/edit-question.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('Includes/head.php'); ?>
</head>
<body>
    <?php include('Includes/navbar.php'); ?>
    
    <?php  
        if(isset($errormsg)){
            echo '<p>'.$errormsg.'</p>';
        }
    ?><br><br>
    <?php 
        if(isset( $question_content)){
            ?>
            <form class="container" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Titre de la question</label>
                    <input type="text" class="form-control" name="title" value="<?= $question_title?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Description de la question</label>
                    <textarea class="form-control" name="description"><?= $question_description?></textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Contenu de la question</label>
                    <textarea class="form-control" name="content"><?= $question_content?></textarea>
                </div>
                <button type="submit" class="btn btn-warning" 
                        name="validate">Modifier la question</button>
            </form>
        <?php   
        }
    ?>
   
</body>
</html>