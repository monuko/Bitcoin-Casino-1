<?php
$trxn = htmlspecialchars($_GET["t"]);


$url = 'https://skobet.com/a.php?t='. $trxn;
$obj = json_decode(file_get_contents($url), true);


echo "Sender : " . $obj[sender] . "<br>";
echo "Transaction Hash : " . $obj[trxn] . "<br>";
echo "Confirmed In : " . $obj[blocknum] . "<br>";
echo "Block " . $obj[blocknum] . " Hash is " . $obj[blockhash] . "<br>";
echo  "<br>";

echo  "[FORMULA] A = sha512(transaction hash) + sha512(blockhash) + sha512(blocknum)" . "<br>";
echo  "[FORMULA] B = sha512(A)" . "<br>";
echo  "<br>";
echo  "B = " . $obj[bethash]  . "<br>";


echo  "Genrating Roll From Hash <br>";
echo  "[Formula] C = hexdec(substr(B, 0, 4) <br>";
echo  "[Formula] D = C%(10000) <br>";
echo  "[Formula] E = D/100 <br>";
echo  "<br>";echo  "<br>";

echo  "ROLL is :" . $obj[roll] ."<br>";


?>
