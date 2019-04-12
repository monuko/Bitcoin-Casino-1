<?php
 
function getHTMLcode($url) {
	
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 10.10; labnol;) ctrlq.org");
	curl_setopt($curl, CURLOPT_FAILONERROR, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($curl);
	curl_close($curl);
	
	return $html;
		
}



    $url="https://www.amazon.in/dp/B07DJHV6VZ/";
    $html= getHTMLcode($url);
    $price ='/<span class="a-size-base a-color-price s-price a-text-bold"><span class="currencyINR">&nbsp;&nbsp;<\/span>(?P<price>[^>]*)<\/span>/';
    preg_match_all($price,$html,$cost);
   


echo $cost;

?>
