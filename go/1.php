<?php

    /* Enter the Amazon Product ISIN */
    $amazonISIN = "B077Y3GCD4";

    /* Grab the content of the HTML web page */
    $html = file_get_contents("http://www.amazon.in/gp/aw/d/$amazonISIN");

    /* Clean-up */
    $html = str_replace("&amp;nbsp;", "", $html);

echo $html;

?>
