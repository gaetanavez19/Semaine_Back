<?php
  include "conf/info.php";
  $title="Playing Movies";
  include "header.php";
?>
    <div class="popular_movies_container">
      <h2 class="popular_movies_category">Playing Movies </h2>
      <?php
        include "api/api_now.php";
        $min = date('D M Y', strtotime($nowplaying->dates->minimum));
        $max = date('D M Y', strtotime($nowplaying->dates->maximum));
        echo "<p class='playing_movie_date'>
        <span>from <span>". $min . "</span>,
        until <span>" . $max . "</span></p>";
      ?>
      
        <?php

          foreach($nowplaying->results as $p){
            echo '
            <div class="gallery">
              <a href="movie.php?id=' . $p->id . '">
              <img src="'.$imgurl_1.''. $p->poster_path . '">
               <div class="info_popular_playing">
                 <h2 class="title_popular_playing">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2>
                 <p class='text_popular_playing'>
                   Rate : " . $p->vote_average . " <br>
                   Vote : " . $p->vote_count . " <br>
                   Popularity : " . round($p->popularity) . "</p>
               </div>  
              </a>
            </div>";
          }
        ?>
      </div>
    
<?php
include "footer.php";
?>