<?php

$cmc = curl_init();
curl_setopt($cmc, CURLOPT_URL, "https://api.themoviedb.org/3/movie/".$id_movie."/credits?api_key=" . $apikey);
curl_setopt($cmc, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cmc, CURLOPT_HEADER, FALSE);
curl_setopt($cmc, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response23 = curl_exec($cmc);
curl_close($cmc);
$credits = json_decode($response23);

