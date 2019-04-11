<?php 
    require './database/database.php';
    include 'movie.php';
     // recuper toutes les données
     $query = $pdo->query('SELECT * FROM watchlist');
     $movieID = $query->fetchAll();
     echo '<pre>';
     print_r($movieID);
     echo '</pre>';
?>

