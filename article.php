<?php require('Actions/questions/showArticleContent.php'); 
      require('Actions/questions/post_answer.php');
      require('Actions/questions/showAllAnswer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('Includes/head.php') ?>
</head>
<body>
<?php require('Includes/navbar.php') ?>
<br><br>

<div class="container">
    <?php
        if(isset($errormsg)){
            echo($errormsg);
        }
    ?>


    <?php
        if(isset($question_date_publication)){
            ?>
                <section class="show-content">
                    <?= $question_title; ?>
                    <hr>
                    <?= $question_content; ?>
                    <hr>
                    <small><?='<b>'.$question_pseudo_auteur.'</b>'.'   '.$question_date_publication; ?></small>
                </section>
                <br>
                <section class="show-answers">
                    <form action="" method="POST" class="form-group">
                        <div class="mb-3">
                            <label for="" class="form-label">Réponse</label>
                            <textarea name="answer" class="form-control" ></textarea><br>
                            <button type="submit" class="btn btn-primary" name="validate">Publier</button>
                        </div>
                    </form>
                    <?php 
                    foreach($getAllAnswers as $answer){
                        ?>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <?= $answer['pseudo_auteur'] ?>
                            </div>
                            <div class="card-body">
                                <?= $answer['contenu'] ?>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </section>
            <?php
        }
    ?>

</div>
</body>
</html>