<?php 
	/**
		cURL (client URL): cURL is a library that lets you make HTTP requests in PHP.
	 1) Create cURL resource
	 $curl = curl_init();
	 CURL is a library that lets you make HTTP requests in PHP.
	 2) Set cURL
	 curl_setopt( $curl, CURLOPT_URL, 'http://www.google.com');
	 3) Run cURL (execute http request)
	 curl_exec($curl);
	 4) Close cURL resource
	 curl_close($curl);

	Once cURL resource is created, when can then manipulate that resource using functions, specifically designed for that resource ( eg: curl_setopt()).

	 */

	/**
	  * Exercise 1 
	  */ 

	// $curl = curl_init(); // $curl is going to be data type curl resource
	// curl_setopt( $curl, CURLOPT_URL, 'https://www.google.com');
	// curl_exec( $curl );



	/**
	  * Exercise 2
	  */ 


	$curl = curl_init();

	$search_string = "video+game";
	$url = "https://www.lazada.vn/catalog/?q=$search_string";

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($curl);

	preg_match_all("!https://vn-test-11.slatic.net/p/2/[^\s]*?-catalog_233.jpg!", $result, $match);

	$images = array_values( array_unique($match[0]) );

	//print_r($images);

	foreach ($images as $image) {
		echo '<div style="float:left; margin: 10 0 0 0;" >';
		echo '<img src="'.$image.'" ><br />';
		echo '</div>';
	}
	curl_close($curl);


	// 



			
?>
