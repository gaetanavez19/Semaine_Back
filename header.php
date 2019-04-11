<?php
define('URL', 'http://localhost:8500/Semaine_Back/');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fontlibrary.org/face/bebas" rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <link href="<?= URL ?>style/style.css" rel="stylesheet">
    <link href="<?= URL ?>style/header.css" rel="stylesheet">
    <link href="<?= URL ?>style/login.css" rel="stylesheet">
    <link href="<?= URL ?>style/search.css" rel="stylesheet">
    <link href="<?= URL ?>style/login_validation.css" rel="stylesheet">
    <link href="<?= URL ?>style/popular&playing.css" rel="stylesheet">
    <link href="<?= URL ?>style/movie.css" rel="stylesheet">
    <link href="<?= URL ?>style/footer.css" rel="stylesheet">

    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?>
    </title>
  </head>
  <body>
    <div class="header">
        <h1>
          <a class="sitename" href="<?=URL?>index.php"><?php echo $sitename ?></a>
        </h1>
        <div class="header_links">
          <div class="left_links">
            <a href="popular.php">Popular</a>
            <a href="now-playing.php">Now Playing</a>
            <a href="upcoming.php">Upcoming</a>
          </div>
          <div class="right_links">
            <form action="search.php" method="get">
              <div class="search-box">
                <button type="submit"></button>
               <input type="search" name="search" placeholder="Ex : Aquaman" autocomplete="off" required>
              </div>    
            </form>
            <a href="login/index.php">Watchlist</a>
          </div>
        </div>
    </div>


