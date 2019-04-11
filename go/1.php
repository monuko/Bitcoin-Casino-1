<?php

    /* Enter the Amazon Product ISIN */
    $amazonISIN = "B077Y3GCD4";

    /* Grab the content of the HTML web page */
    $html = file_get_contents("http://www.amazon.in/gp/aw/d/$amazonISIN");

    /* Clean-up */
    $html = str_replace("&amp;nbsp;", "", $html);

    /* The magical regex for extracting the price */
    $regex = '/\<b\>(Prezzo|Precio|Price|Prix Amazon|Preis):?\<\/b\>([^\<]+)/i';

    /* Return the price */

    if (preg_match($regex, $html, $price)) {
        $price = number_format((float)($price[2]/100), 2, '.', '');
        echo "The price for amazon.com/dp/$amazonISIN is $price";
    } else {
        echo "Sorry";
    }

?>
