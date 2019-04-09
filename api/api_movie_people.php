<?php

$cmp = curl_init();
curl_setopt($cmp, CURLOPT_URL, "https://api.themoviedb.org/3/discover/movie/".$id_movie."&include_video=false&include_adult=false&sort_by=popularity.desc&language=en-US&api_key=" . $apikey);
curl_setopt($cmp, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cmp, CURLOPT_HEADER, FALSE);
curl_setopt($cmp, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response21 = curl_exec($cmp);
curl_close($cmp);
$movie_similar_id = json_decode($response21);
?>


