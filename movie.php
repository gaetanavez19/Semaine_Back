<?php
  include "conf/info.php"; 
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_movie_similar.php";
    include_once "api/api_tunefind.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>#</title>
</head>
<body>
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
        <?php 
          foreach($movie_video_id->results as $key => $video){
              if($key === 0)
              {
                echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
              }
          }
        ?>
      </div> 
      <div>
        <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
        <h3>Similar Movies</h3>
          <ul>
          <?php
            $count = 4;
            $output=""; 
            foreach($movie_similar_id->results as $sim){
              $count--;
              $output.='<li><a href="movie.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w300'.$sim->backdrop_path.'"><p>'.$sim->title.'</p></a></li>';
              if($count <=0){
                break;
      
              }
            }
            echo $output;
          ?>
          </ul>
      </div>
            
      <div>
          <p>title</p>
          <?php
            // echo '<pre>';
            // print_r($result);
            // echo '</pre>';
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
</body>
</html>
    




<?php
  include "footer.php";
?>