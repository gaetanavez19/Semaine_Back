<?php
define('URL', 'http://localhost:8888/Semaine_Back/');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
    <link href="https://fontlibrary.org/face/bebas" rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <link href="<?= URL ?>style/style.css" rel="stylesheet">
    <link href="<?= URL ?>style/header.css" rel="stylesheet">
    <link href="<?= URL ?>style/login.css" rel="stylesheet">
    <link href="<?= URL ?>style/search.css" rel="stylesheet">
    <link href="<?= URL ?>style/login_validation.css" rel="stylesheet">
    <link href="<?= URL ?>style/popular&playing.css" rel="stylesheet">
    <link href="<?= URL ?>style/movie.css" rel="stylesheet">
    <link href="<?= URL ?>style/comment.css" rel="stylesheet">
    <link href="<?= URL ?>style/footer.css" rel="stylesheet">

    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?>
    </title>
  </head>
  <body>
    <div class="header">
        <h1>
          <a class="sitename" href="<?=URL?>index.php">Checkmovie</a>
        </h1>
        <div class="header_links">
          <div class="left_links">
            <a href="<?=URL?>popular.php">Popular</a>
            <a href="<?=URL?>now-playing.php">Now Playing</a>
            <a href="<?=URL?>upcoming.php">Upcoming</a>
          </div>
          <div class="right_links">
            <form action="search.php" method="get">
              <div class="search-box">
                <button type="submit"></button>
               <input type="search" name="search" placeholder="Ex : Aquaman" autocomplete="off" required>
              </div>    
            </form>
            <a href="<?=URL?>login/login.php">Watchlist</a>
          </div>
        </div>
    </div>


