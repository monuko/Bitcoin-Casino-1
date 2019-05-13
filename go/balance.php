<meta http-equiv="refresh" content="55">


<?
$result =  file_get_contents("https://api.nicehash.com/api?method=balance&id=193027&key=9295f08b-d659-a348-7b1d-365539733937");
$obj = json_decode($result, true);
$bal = $obj['result']['balance_confirmed'] + $obj['result']['balance_pending']  ;


$result2 =  file_get_contents("https://blockchain.info/ticker");
$obj = json_decode($result2, true);
$inr = $obj['INR']["15m"];

$c= $inr * $bal;


echo "<center><font size="60"> " . $bal . " BTC  ->  " . $c  . " INR    </font></center>";
?>
