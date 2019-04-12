<?php
function clean($string) {
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function extract_unit($string, $start, $end){
$pos = stripos($string, $start);
$str = substr($string, $pos);
$str_two = substr($str, strlen($start));
$second_pos = stripos($str_two, $end);
$str_three = substr($str_two, 0, $second_pos);
$unit = trim($str_three); 

return $unit;
}


    $url="https://www.amazon.in/dp/B07DJHV6VZ/";
    $url =  file_get_contents($url);
    $data= clean(extract_unit($url, 'asin-price=', 'data-asin-shipping'));







echo $data;
?>
