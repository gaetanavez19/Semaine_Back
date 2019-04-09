<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
    </title>
    <link href="style/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>
      <?php echo $sitename ?>
    </h1>
    <p>
      <small>"
        <?php echo $tagline ?>"
      </small>
    </p>
    <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Ex : Kingsman" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">Search
      </button>
    </form>
    <ul>
      <li>
        <a href="index.php">Home
        </a>
      </li>
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