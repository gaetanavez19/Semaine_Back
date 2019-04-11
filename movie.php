 <?php
    include "conf/info.php"; 
    $id_movie = $_GET['id'];
      include "api/api_movie_id.php";
      include "api/api_movie_video_id.php";
      include "api/api_movie_similar.php";
      include "api/api_tunefind.php";
      include "api/api_movie_credits.php";
      $title = "Detail Movie (".$movie_id->original_title.")";
      include "header.php";
      require './database/database.php';

      session_start();
  ?>
      <?php 
      if(isset($_GET['id'])){
      $id_movie = $_GET['id']; 
      ?>
      <form action="./wishlist.php" method="post">
        <input type="hidden" name="username" value="<?=$_SESSION['username'] ?>">
        <input type="hidden" name="movieId" value="<?=$movie_id->original_title?>">
        <button type="submit"><img src="./images/heart.svg" alt="add_to_watchlist"> Add to watchlist</button>
      </form>
          
    <?php 

// Ajouter à la wishlist sur la base de données

     // mettre les données dans un tableau 
       

    ?> 
      <div class="movie_container">
      <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
        <div class="movie_top_description">
          <div class="description">
            <a class="movie_addtowishlist" href="#">Add to Watchlist</a>
            <h1 class="movie_title"><?php echo $movie_id->original_title ?></h1>
            <p class="movie_tagline"> "<?php echo $movie_id->tagline ?> "</p>
            <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
  
            <p><span class="yellow_title">Genre : </span>
                <?php
                  foreach($movie_id->genres as $g){
                    echo '<span>' . $g->name . '</span> ';
                  }
                ?>
            </p>
        </div>
  
            <p class="movie_vote"><span class="vote_green"><?php echo $movie_id->vote_average ?></span>/10</p>
            <p class="movie_overview"><?php echo $movie_id->overview ?>..</p>
              
  
              <p><span class="yellow_title"> Production Companies :</span>
                  <?php
                    foreach($movie_id->production_companies as $key1 => $pc){
                      if($key1 === 0)
                      {
                        echo $pc->name." ";
                      }
                    }
                  ?>
              </p>
          </div>
  
        </div>
      </div>
      <div class="container_soundtrack">
        <div class="sountrack_flex">
          <h1 class="soundtrack_title" >Soundtrack</h1>
          <?php if(!isset($result->error)):?>
          <?php foreach ($result->songs as $_song): ?>
          <img class="logo_play" src="./images/play-circle.svg" alt="search">
                  <div class="sountrack_playlist"><h2> <?= $_song->name ?> </h2>
                    <h3> <?= $_song->artist->name?></h3>
                  <?php echo '<a class="artist" href="'.$_song->stores[1]->url.'">Listen on your platform</a>'?> 
                  </div>
              <?php endforeach; ?>  
            <?php endif ?>  
        </div>
      </div>
  
      <div class="video">
          <h1 class="trailer_title">Trailer</h1>
          <div class="container_video">
            <?php 
              foreach($movie_video_id->results as $key => $video){
                  if($key === 0)
                  {
                    echo '<iframe width="750" height="400" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
                  }
              }
            ?>
          </div>
      </div> 
      <div class="buttons">
  
      </div>
  
  
      <div class="container_casting">
        <h1>Casting</h1>
        
        <span><ul>
          <?php
            foreach($credits->cast as $key => $_cast){
              if($key <= 6)
              {
                echo '
                <a href="https://fr.wikipedia.org/wiki/'.$_cast->name.'" target="_blank">
                <li>'.$_cast->name.'</li>
                </a>';
              }
            }
          ?></ul>
        </span></p>
      </div>

      <?php
        include "comment.php";
      ?>


      <div class="container_similarmovie">
        <h1 class ="similarmovie_title" >Similar Movies</h1>
          <div class="similarmovie">
          <?php
            $count = 4;
            $output=""; 
            foreach($movie_similar_id->results as $sim){
              $count--;
              $output.='
                          <a href="movie.php?id='.$sim->id.'">
                            <img class="movie_poster" src="http://image.tmdb.org/t/p/w300'.$sim->poster_path.'">
                            <p>'.$sim->title.'</p>
                          </a>';
              if($count <=0){
                break;
      
              }
            }
            echo $output;
          ?>
        </div>
      </div>

      <?php
        include "comment.php";
      ?>


  
      <?php 
      } else{
        echo "No similar movie";
      }
      ?>
  
    <?php
    include 'footer.php';
  ?>
  