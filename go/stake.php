<?

$inramount2 = htmlspecialchars($_GET["inr"]);
$inrwin2 = htmlspecialchars($_GET["inrwin"]);

$inramount = $inramount2 * 0.95;
$inrwin = $inrwin2 * 1.02;

$upi = htmlspecialchars($_GET["upi"]);
$chance = 99*($inramount/$inrwin);


$amount = file_get_contents("https://blockchain.info/tobtc?currency=INR&value=" . $inramount );


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stake.com/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"query\":\"mutation {  diceRoll (amount: $amount, target: $chance, condition: below, currency: btc) { iid    payout    nonce  }}\"}");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Accept: application/json';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Dnt: 1';
$headers[] = 'Origin: https://api.stake.com';
$headers[] = 'X-Access-Token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiIyZjA3ODhlOS1mNThkLTRjNTgtYjk5NS01NWY3MDc0NGFlNWIiLCJzY29wZXMiOlsiYmV0Il0sImlhdCI6MTU1NDIxMjc2NSwiZXhwIjoxNTU5Mzk2NzY1fQ.sJOyRjQrCJLwX_Ef-1F733J56MWOnMWOytBW2QPTiKU';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$obj = json_decode($result, true);

$iid = $obj['data']['diceRoll']['iid'];
// string reverse krke di h user ko
$wonbo = 0;

if($obj['data']['diceRoll']['payout']>0){
$wonbo = 1;
$msgs = "WON";
}else{
$msgs = "Loss";
}


?>



{
 "messages": [
   {"text": "You <? echo $msgs; ?> !! TICKET ID : <? echo strrev($iid); ?> "}
 ]
}
