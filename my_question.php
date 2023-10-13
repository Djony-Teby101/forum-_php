<?php
require('./Actions/questions/my_question.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('Includes/head.php') ?>
</head>
<body>
<?php include('Includes/navbar.php') ?>

<?php 
//    while($question= $getallmyquestions->fetch()){
//         echo $question['titre'];
//    }

foreach ($getallmyquestions as $question) {
?>  <br><br>
<div class="container">
        <div class="card">
            <h5 class="card-header">
                <a href="article.php?id=<?= $question['id']; ?>">
                    <?= $question['titre']; ?>
                </a>
            </h5>
            <div class="card-body">
                <p class="card-text">
                    <?= $question['description']; ?>
                </p>
                <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                <a href="edit-question.php?id=<?= $question['id'];?>" class="btn btn-warning">Modifier la question</a>
                <a href="Actions/questions/delete-quest.php?id=<?= $question['id'];?>" class="btn btn-danger">Modifier la question</a>
            </div>
        </div>
    </div>
    <br>


<?php
}
?>

</body>
</html>