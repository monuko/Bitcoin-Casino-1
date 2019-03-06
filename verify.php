<h3>
<?php
$trxn = htmlspecialchars($_GET["t"]);


$url = 'https://skobet.com/a.php?t='. $trxn;
$obj = json_decode(file_get_contents($url), true);


echo "Sender : " . $obj[sender] . "<br>";
echo "Transaction Hash : " . $obj[trxn] . "<br>";
echo "Confirmed In Block : " . $obj[blocknum] . "<br>";
echo "Block " . $obj[blocknum] . " Hash is " . $obj[blockhash] . "<br>";
echo  "<br>";

echo  "[FORMULA] A = sha512(transaction hash) + sha512(blockhash) + sha512(blocknum)" . "<br>";
echo  "[FORMULA] B = sha512(A)" . "<br>";
echo  "<br>";
echo  "B = " . $obj[bethash]  . "<br>";

echo  "<br>";
echo  "<br>";
echo  "<br>";

echo  "Genrating Roll From Hash <br>";
echo  "[FORMULA] C = hexdec(substr(B, 0, 4) <br>";
echo  "[FORMULA] D = C%(10000) <br>";
echo  "[FORMULA] E = D/100 <br>";
echo  "<br>";
echo  "<br>";

echo  "ROLL is :" . $obj[roll] ."<br>";
echo  "ROLL Below To Win :" . $obj[winroll] ."<br>";
echo  "Won Amount  :" . $obj[winamount] ."<br>";

?>
</h3>
<br><br><br><br><br>
PHP CODE TO VERIFY YOURSELF<br>
<br>--------------------------------------------------<br>

<pre>

$trxn ="transaction hash";
$blocknum = "transaction blocknum";
$blockhash = "transaction blockhash";

$imphash = hash('sha512', hash('sha512', $trxn) . hash('sha512', $blockhash) . hash('sha512', $blocknum) );
$roll = hexdec(substr($imphash, 0, 4));
$roll = $roll%(10000);
$roll = $roll/100;

echo $roll;
</pre><br>




