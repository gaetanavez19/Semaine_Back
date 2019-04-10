<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fontlibrary.org/face/bebas" rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <link href="style/style.css" rel="stylesheet">
    <link href="style/header.css" rel="stylesheet">
    <link href="./style/footer.css" rel="stylesheet">

    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?>
    </title>
  </head>
  <body>
    <div class="header">
        <h1>
          <a class="sitename" href="index.php"><?php echo $sitename ?></a>
        </h1>
        <div class="header_links">
          <div class="left_links">
            <a href="popular.php">Popular</a>
            <a href="now-playing.php">Now Playing</a>
            <a href="upcoming.php">Upcoming</a>
          </div>
          <div class="right_links">
            <a href="#">Watchlist</a>
            <a href="#">Account</a>
          </div>
        </div>
    </div>