<?php
require('Actions/users/config.php');

// selectionner toutes les questions par ordre decroissant.
$sql="SELECT * FROM questions ORDER BY id DESC LIMIT 0,5";
$getAllQuestions=$dbb->query($sql);

if(isset($_GET['search']) AND !empty($_GET['search'])){
    $userSearch=$_GET['search'];

    $getAllQuestions=$dbb->query('SELECT id,id_auteur,titre,description,
                                    id_auteur,date_publication FROM questions WHERE 
                                    titre LIKE "%'.$userSearch.'%"ORDER BY id DESC');
}

?>