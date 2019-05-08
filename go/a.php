<?php
$inrwin2 = $_GET["inrwin"];
$upi = $_GET["upi"];
$txnid = $_GET["txnid"];

$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
$result = $conn->query("SELECT bal,ticketid FROM PY3gdINTnO.bal WHERE upi='$upi' AND txnid=$txnid"); 
$inramount2 = $result ->fetch_object()->bal;
$ticketid = $result ->fetch_object()->ticketid; 


if($inramount2>1){
if($ticketid<1){


/////////////////////
$inramount = $inramount2 * 0.96;
$inrwin = $inrwin2 * 1.0234;
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
curl_close ($ch);


$obj = json_decode($result, true);
$iid = $obj['data']['diceRoll']['iid'];
// string reverse krke di h user ko



if($obj['data']['diceRoll']['payout']>0){
$wonbo = 1;
}else{
$wonbo = 0;
}



$conn->query("UPDATE PY3gdINTnO.bal  SET ticketid=$iid AND  WHERE upi='$upi' AND txnid=$txnid"); 
$conn->query("UPDATE PY3gdINTnO.bal  SET wininr=$inrwin2 AND  WHERE upi='$upi' AND txnid=$txnid"); 
$conn->query("UPDATE PY3gdINTnO.bal  SET win=$wonbo AND  WHERE upi='$upi' AND txnid=$txnid"); 

$response = array(
        'id' => $iid,
        'win'=> $wonbo
);



echo json_encode($response); 



/////////////////////
}}


mysqli_close($conn);
?>
