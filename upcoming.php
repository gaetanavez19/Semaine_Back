<?php
  include "conf/info.php";
  $title="Upcoming Movies";
  include_once "header.php";
?>
  <div class="popular_movies_container">
      <h2 class="popular_movies_category">Upcoming Movies</h2>
    <?php
      include_once "api/api_upcoming.php";
      $min = date('F l Y', strtotime($upcoming->dates->minimum));
      $max = date('F l Y', strtotime($upcoming->dates->maximum));
      echo "<p class='playing_movie_date'>
      <span class='date_text'>Coming from </span><span>". $min . "</span><br>
      <span class='date_text'>until</span> <span class='date'>" . $max . "</span></p>";
    ?>
    <?php
      foreach($upcoming->results as $p){
        echo '
        <div class="gallery">
        <a href="movie.php?id=' . $p->id . '">
        <img src="'.$imgurl_1.''. $p->poster_path . '">
         <div class="info_popular_playing">
           <h2 class="title_popular_playing">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2>
         </div>  
        </a>
      </div>";
    }
    ?>
  </div>

<?php include "footer.php";?>