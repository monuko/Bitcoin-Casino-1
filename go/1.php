<?php
    $html = file_get_contents("http://www.amazon.in/gp/aw/d/B077Y3GCD4");

function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}


$content = $html;
$start = "data-asin-price=";
$end = " data-asin-shipping ";
$output = getBetween($content,$start,$end);
echo $output;

?>
