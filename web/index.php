<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://indeed-indeed.p.rapidapi.com/apigetjobs?jobkeys=java&v=2&format=json&publisher=any",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: indeed-indeed.p.rapidapi.com",
		"x-rapidapi-key: 279d8d3289msh60b7c4ff9937c08p16f77fjsnedac47b9d0a4"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}