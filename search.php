<?php
$input=$_GET['search'];
$search=$input;
include "conf/info.php";
$title = 'Search | '.$input;
include "header.php";
include "api/api_search.php";
?>
	<p>Results for: <?php echo $input?></p>
    <div>
<?php
	
        foreach($search->results as $results){
			$title = $results->title;
			$id = $results->id;
			$release = $results->release_date;
			$poster = $results->poster_path ;
			if (empty($poster)){
				$poster =  dirname($_SERVER['PHP_SELF']).'/image/not_found.jpg';
				} 
			else {
				$poster = 'http://image.tmdb.org/t/p/w300'.$poster;
				 }
			echo '<li><a href="movie.php?id=' . $id . '"><img src="'.$poster.'"><p>'.$title.'</p></a></li>';
		}
		

	// elseif($channel=="tv"){
    //     foreach($search->results as $results){
	// 		$title 		= $results->original_name;
	// 		$id 		= $results->id;
	// 		$release	= $results->first_air_date;
	// 		if (!empty($release) && !is_null($release)){
	// 			$tempyear 	= explode("-", $release);
	// 			$year 		= $tempyear[0];
	// 			if (!is_null($year)){
	// 				$title = $title.' ('.$year.')';
	// 			}
	// 		}
	// 		$poster 	= $results->backdrop_path;
	// 		if (empty($poster) && is_null($poster)){
	// 			$poster = $pathloc.'image/no-backdrop.png';
	// 		} 
	// 		else {
	// 			$poster = 'http://image.tmdb.org/t/p/w300'.$poster;
	// 		}
	// 		echo '<li><a href="tvshow.php?id=' . $id . '"><img src="'.$poster.'"><h4>'.$title.'</h4></a></li>';
	// 		}
	// 	}
		
    //     ?>
		</div>
		
 <?php
include('footer.php');
?>
