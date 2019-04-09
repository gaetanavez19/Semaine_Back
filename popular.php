<?php
  include "conf/info.php";
  $title="Popular Movies";
  include_once "header.php";
?>
    <h2>Popular Movies</h2>
    <ul>
      <?php
        include_once "api/api_popular.php";
        foreach($popular->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h2>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2><p> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</p></a></li>";
        }
      ?>
    </ul>
<?php
  include_once "footer.php";
?>