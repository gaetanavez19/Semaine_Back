<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_movie_similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
?>
    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <h1><?php echo $movie_id->original_title ?></h1>
    <?php
      echo "<p> ".$movie_id->tagline." </p>";
    ?>

<?php 

  foreach($movie_video_id->results as $key => $video){
      if($key === 0)
      {
        echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
  }
?>

    <hr>
      <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
      <p>Title : <?php echo $movie_id->original_title ?></p>
      <p>Tagline : <?php echo $movie_id->tagline ?></p>
      <p>Genres : 
          <?php
            foreach($movie_id->genres as $g){
              echo '<span>' . $g->name . '</span> ';
            }
          ?>
      </p>
      <p>Overview : <?php echo $movie_id->overview ?></p>
      <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
      <p>Production Companies :
          <?php
            foreach($movie_id->production_companies as $pc){
              echo $pc->name." ";
            }
          ?>
      </p>
      <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
    <hr>
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
 
    <?php 
    } else{
      echo "No similar movie";
    }
    ?>

<?php
  include_once "footer.php";
?>