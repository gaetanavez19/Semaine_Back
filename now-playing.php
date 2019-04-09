<?php
  include "conf/info.php";
  $title="Playing Movies";
  include_once "header.php";
?>

    <h2>Playing Movies </h2>
    <?php
      include_once "api/api_now.php";
      $min = date('D M Y', strtotime($nowplaying->dates->minimum));
      $max = date('D M Y', strtotime($nowplaying->dates->maximum));
      echo "<span>from <span>". $min . "</span>, until <span>" . $max . "</span></p>";
    ?>
    <hr>
    <ul>
      <?php
        
        foreach($nowplaying->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><p>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</p><p> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</p></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>