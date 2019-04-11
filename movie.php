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
  
  ?>
      <?php 
      if(isset($_GET['id'])){
      $id_movie = $_GET['id']; 
      ?>
          <button type="submit"><img src="./images/heart.svg" alt="add_to_watchlist"> Add to watchlist</button>
    <?php 
<<<<<<< HEAD

// Ajouter à la wishlist sur la base de données

     // mettre les données dans un tableau 
     if(!empty($_POST))
     {
         $data = [
             'movieID' => trim($_POST['movieID']),
         ];   
         // envoyer dans SQL
         $prepare = $pdo->prepare('
             INSERT INTO
                 watchlist (movieID)
             VALUES
                 (:movieID)
         ');
         $prepare->execute($data);
     }    

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
        <div>
              <h1 class="soundtrack_title" >Soundtrack</h1>
              <?php foreach ($result->songs as $_song): ?>
                  <h1> <?= $_song->name ?> </h1>
                  <h2> <?= $_song->artist->name?></h2>
                  <?php echo '<a href="'.$_song->stores[1]->url.'">Listen on your platform</a>'?> 
              <?php endforeach; ?>  
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
        <h3>Casting</h3>
        
        <p>acteur: <span> 
          <?php
            foreach($credits->cast as $key => $_cast){
              if($key <= 6)
              {
                echo $_cast->name.", ";
              }
            }
          ?>
        </span></p>
      </div>
      <div class="container_similarmovie">
        <h3 class ="similarmovie_title" >Similar Movies</h3>
          <div class="similarmovie">
          <?php
            $count = 4;
            $output=""; 
            foreach($movie_similar_id->results as $sim){
              $count--;
              $output.='
                          <a href="movie.php?id='.$sim->id.'">
                            <img src="http://image.tmdb.org/t/p/w300'.$sim->poster_path.'">
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
      } else{
        echo "No similar movie";
      }
      ?>
  
  <?php
    include "footer.php";
  ?>
  
=======
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
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
      <div>
<<<<<<< HEAD
          <p>title</p>
          <?php
            echo '<pre>';
            print_r($result);
            echo '</pre>';
          ?>
          <?php foreach ($result->songs as $_song): ?>
              <h1> <?= $_song->name ?></h1>
              <h2> <?= $_song->artist->name?></h2>
              <?php echo '<a href="'.$_song->stores[1]->url.'">Listen on Spotify</a>'?> 
              <?php
              ?>
          <?php endforeach; ?>  
          </p>
          <p>artiste</p>
=======
            <h1 class="soundtrack_title" >Soundtrack</h1>
            <?php foreach ($result->songs as $_song): ?>
                <h1> <?= $_song->name ?> </h1>
                <h2> <?= $_song->artist->name?></h2>
                <?php echo '<a href="'.$_song->stores[1]->url.'">Listen on your platform</a>'?> 
            <?php endforeach; ?>  
>>>>>>> a8bab152ea53b30bfe7dce2e4ab46f6380f9aeda
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
      <h3>Casting</h3>
      
      <p>acteur: <span> 
        <?php
          foreach($credits->cast as $key => $_cast){
            if($key <= 6)
            {
              echo $_cast->name.", ";
            }
          }
        ?>
      </span></p>
    </div>
    <div class="container_similarmovie">
      <h3 class ="similarmovie_title" >Similar Movies</h3>
        <div class="similarmovie">
        <?php
          $count = 4;
          $output=""; 
          foreach($movie_similar_id->results as $sim){
            $count--;
            $output.='
                        <a href="movie.php?id='.$sim->id.'">
                          <img src="http://image.tmdb.org/t/p/w300'.$sim->poster_path.'">
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
    } else{
      echo "No similar movie";
    }
    ?>

<?php
  include "footer.php";
?>
>>>>>>> f06a4d14dc9d29736b867cdf166294dc7d2559a4
