<?php
function clean($string) {
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}


    $url="https://www.amazon.in/dp/B07DJHV6VZ/";
    $url =  file_get_contents($url);


echo clean($url);

?>
