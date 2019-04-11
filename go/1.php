<?php
    $html = file_get_contents("http://www.amazon.in/gp/aw/d/B077Y3GCD4");

function find_between(string $string, string $start, string $end, bool $greedy = false) {
    $start = preg_quote($start);
    $end   = preg_quote($end);
 
    $format = '/(%s)(.*';
    if (!$greedy) $format .= '?';
    $format .= ')(%s)/';
 
    $pattern = sprintf($format, $start, $end);
    preg_match($pattern, $string, $matches);
 
    return $matches[2];
}


$string = $html;
$start = "<span class="a-size-mini twisterSwatchPrice"> <span class="currencyINR">&nbsp;&nbsp;</span>";
$end = "</span>";
var_dump(find_between($string, $start, $end));

?>
