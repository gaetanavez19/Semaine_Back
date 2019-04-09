<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?>
    </title>
    <link href="style/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h1>
        <a class="sitename" href="index.php"><?php echo $sitename ?></a>
      </h1>
      <ul class="header_link">
        <li>
          <a href="popular.php">Popular
          </a>
        </li>
        <li>
          <a href="now-playing.php">Now Playing
          </a>
        </li>
        <li>
          <a href="upcoming.php">Upcoming
          </a>
        </li>
        <li>
          <a href="tv-series.php">TV Series
          </a>
        </li>
      </ul>
      <ul class="header_users">
        <li>
            <a href="#">Watchlist
            </a>
          </li>
        <li>
          <a href="#">Account
          </a>
        </li>
      </ul>  
    </div>