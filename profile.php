<?php require('Actions/users/profile-actions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require('Includes/head.php') ?>
</head>
<body>
    <?php require('Includes/navbar.php') ?>
    <?php
        if(isset($errormsg)){
            echo $errormsg;
        }
        if(isset($getHisQuestions)){
            ?>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4>@<?= $user_pseudo?></h4>
                        <hr>
                        <p><?= $user_lastname.' '.$user_firstname ?></p>
                    </div>
                </div>
            </div>
            <br><br>
            <?php
                while($question=$getHisQuestions->fetch()){
                    ?>

                    <div class="container" >
                        <div class="card">
                            <div class="header">
                                <?= $question['titre'] ?>
                            </div>
                            <div class="card-body">
                                <?= $question['description'] ?>
                            </div>
                            <div class="card-footer">
                                <?= $question['pseudo']; ?> le <?= $question['date_publication']; ?>
                            </div>
                        </div>
                    </div>
                    
                    <br><br>
                    <?php
                }
            ?>
            <?php
        }
    ?>
</body>
</html>