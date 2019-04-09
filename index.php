<?php
  include "conf/info.php";
  $title="CheckMovies";
  include_once "header.php";
?>
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

<?php
  include_once "footer.php";
?>