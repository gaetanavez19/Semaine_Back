<?php
  include "conf/info.php";
  $title="CheckMovies";
  include_once "header.php";
?>
    <h1>Top Rated Movie</h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h2>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2><p>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</p></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>