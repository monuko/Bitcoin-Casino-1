<?php

    $url="https://www.amazon.in/dp/B07DJHV6VZ/";
    $url =  file_get_contents($url);
    $html= getHTMLcode($url);


echo $html;

?>
