<?php
$product = htmlspecialchars($_GET["product"]);

function extract_unit($string, $start, $end){
$pos = stripos($string, $start);
$str = substr($string, $pos);
$str_two = substr($str, strlen($start));
$second_pos = stripos($str_two, $end);
$str_three = substr($str_two, 0, $second_pos);
$unit = trim($str_three); 

return $unit;
}



if (strpos($pool, 'amazon.in') !== false) {
echo 'RESET LIMIT';

$url =  file_get_contents($product);
$data= extract_unit($url, 'asin-price=', 'data-asin-shipping');
$inrwant = str_replace('"', '', $data);
}



echo $inrwant;
?>

