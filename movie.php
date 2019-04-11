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

?>
    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <div class="movie_container">
      <div class="movie_top_description">
        <h1 class="movie_title"><?php echo $movie_id->original_title ?></h1>
        <p class="movie_tagline"> "<?php echo $movie_id->tagline ?> "</p>
      </div>
        <p class="movie_overview"><?php echo $movie_id->overview ?>..</p>
      <div class="buttons">

      </div>
      <div class="movie_down_description">
        <p class="movie_vote">Vote Average : <span class="vote_green"><?php echo $movie_id->vote_average ?></span></p>
        <p>Genres : 
            <?php
              foreach($movie_id->genres as $g){
                echo '<span>' . $g->name . '</span> ';
              }
            ?>
        </p>
        <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
        <p>Production Companies :
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
            
      <div>
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
      </div>
    
    <?php 
    } else{
      echo "No similar movie";
    }
    ?>

<?php
  include "footer.php";
?>
