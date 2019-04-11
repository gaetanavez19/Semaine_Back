<?php 
    require 'header.php';
    


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
?>

<div>
<h1>WATHCLIST</h1>
</div>

<?php
require 'footer.php';
?>

