<?php
@session_start();
try {
    $dbb=new PDO('mysql:host=localhost;dbname=forum_db','root','');

} catch (PDOException $e) {
    die('Erreur de connexion:'. $e->getMessage());
}

?>