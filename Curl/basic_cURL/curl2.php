<?php 
	$curl = curl_init();

	$search_string = "video+game";
	$url = "https://www.lazada.vn/catalog/?q=$search_string";

	$itoke = http_response($url);

	echo $itoke;

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

?>