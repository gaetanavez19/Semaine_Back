<?php
$input=$_GET['search'];
$search=str_replace(' ', '-', $input);
include "conf/info.php";
$title = 'Search | '.$input;
include "header.php";
include "api/api_search.php";
?>
	<div class="popular_movies_container">
		<h2 class="popular_movies_category">Results for: <?php echo $input?></h2>
<?php
	
        foreach($search->results as $results){
			$title = $results->title;
			$id = $results->id;
			$release = $results->release_date;
			$poster = $results->poster_path ;
			if (empty($poster) && is_null($poster)){
				$poster =  dirname($_SERVER['PHP_SELF']).'/images/no_image.png';
			}
			else {
				$poster = 'http://image.tmdb.org/t/p/w300'.$poster;
				 }
			echo '
			<div class="gallery_search">
				<a href="movie.php?id=' . $id . '">
				  <img src="'.$poster.'">
				  <div class="info_popular_playing">
					  <p>'.$title.'</p>
				  </div>  
				</a>
			</div>';
		}
		
       ?>
		</div>
		
 <?php
include('footer.php');
?>
