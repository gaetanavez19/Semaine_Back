<?php
// Instantiate curl

$login = '04a4f1678d771b0e50a7280b1ab3291a';
$password = 'a435e435dd0f00afb77172a94a4ad2c3';
$url = 'https://04a4f167.api.tunefind.com/api/v2/movie/'.$id_movie.'?id-type=tmdb';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
$result = curl_exec($ch);
curl_close($ch);  

// Json decode
$result = json_decode($result);


// Show result
// echo '<pre>';
// print_r($result);
// echo '</pre>';


?>
