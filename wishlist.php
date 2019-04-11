<?php 
    require './database/database.php';
    require 'header.php';
    require 'footer.php';

    //  // recuper toutes les données

    //  if(!empty($_POST))
    //  {
    //      $data = [
    //          'movieID' => trim($_POST['movieID']),
    //          'username' => trim($_POST['username']),
    //      ];   
    //      // envoyer dans SQL
    //      $prepare = $pdo->prepare('
    //          INSERT INTO
    //              watchlist (movieID, username)
    //          VALUES
    //              (:movieID, :username)
    //      ');
    //      $prepare->execute($data);
    //  }  

    //  $query = $pdo->query('SELECT * FROM watchlist WHERE username="'.$_SESSION['username'].'"');
    //  $movieID = $query->fetchAll();
    //  echo '<pre>';
    //  print_r($movieID);
    //  echo '</pre>';
?>
<div>
<h1>WATHCLIST</h1>
</div>

