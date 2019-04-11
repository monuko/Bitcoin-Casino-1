<?php
 
include('simple_html_dom.php');
 
$url = 'https://www.amazon.in/Sennheiser-CX-507447-Wireless-Earphones/dp/B077Y3GCD4';
 
$html = file_get_html($url);
$links = array();
foreach($html->find('span[class="currencyINR"]') as $a) {
 $links[] = $a->href;
}
 
print_r($links);
 
?>
