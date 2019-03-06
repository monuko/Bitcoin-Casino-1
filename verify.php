<?php
$trxn = htmlspecialchars($_GET["t"]);


$url = 'https://skobet.com/a.php?t='. $trxn;
$obj = json_decode(file_get_contents($url), true);


echo " Formula is: hash('sha512', hash('sha512', $trxn) . hash('sha512', $blockhash) . hash('sha512', $blocknum) ) " . "<br>";



?>
