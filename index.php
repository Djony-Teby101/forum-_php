<?php
require('Actions/users/securityAtion.php');
require('Actions/questions/showAll.php');

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('Includes/head.php') ?>
    <title>Acceuil</title>
</head>
<body>
<?php include('Includes/navbar.php') ?>
<br><br>

<div class="container">
    <form action="" method="GET" class="form-group row">
        <div class="col-8">
            <input type="search" name="search" class="form-control">
        </div>

        <div class="col-4">
            <button class="btn btn-success" type="submit">Recherche</button>
        </div>
    </form>

    <?php
        
        while($question =$getAllQuestions->fetch()) {
            ?>
            <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="article.php?id=<?=$question['id'];?>"><?= $question['titre']?></a>
                </div>
                <div class="card-body">
                <?= $question['description']?> 
                </div>
                <div class="card-footer">Publié par<a href="profile.php?id=<?=$question['id_auteur'] ?>">
                 <?= $question['pseudo'] ?></a> le
                <?= $question['date_publication']?>
                </div>
            </div>
            </div>
            <br>
            <?php
        }
    ?>
</div>
</body>
</html>