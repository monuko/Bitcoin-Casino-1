<?php
$addrrrr=array(
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "1562ws57S8BxnWyAgTSuR3Y4SNDkoR5p9B",
    "15m2yG8s4zmymjfH3D4gnkvDwCNN94oQhh",
    "168vnBonda2sUb8nRYm83NZcSmtsjxc5aN",
    "17Tx6ozt3jumtfMSEm37MWiFzacc8wjxwW",
    "1AyfJaXioXg5Mj1NeGBV6gywr9mfJE9drJ",
    "1FcRk9EZhCd5GzwhEauo6E62rqKGPT55Yb",
    "1GeepMWBrk2WqAsePmtUYLjz5mVmYe55op",
    "1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H",
    "1HxQc9AUiPovQYBJx4vi13g7WUcki7CVUW",
    "1JBcELusCqjB84FnLPwRET5W7YXWt6ACsF",
    "1JT34AYyqQ5MT7GBT5MceyAvhkkqbE8QLY",
    "1KNsmtUSRHp9eoFypjjN8swG6Y43akobuG",
    "1LGXCYKL4mwxdUiBKqFMvw1SR8VWePXS59",
    "1LHm5bfuabK8tvCH7ej7CN7BuYRBQFBiZ",
    "1LvnnoC4nCcc5N55i6SeTpd6wZSrkNS5V",
    "1MdsKwmLE4UfdtJmwsdpTbLA61aFDxHo5N",
    "1MmjZsoZZjrmHwy5R4svVs1AYCmf6DvVkr",
    "1MyHEvezvUPAzkdUDRKt6T5Xgp8xgj6gLQ",
    "1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx"
);


$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?filter=1#"); 
$scrape2 = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=asc&limit=111'), true);

$matches = array();
preg_match('/[a-fA-F0-9]{64}/', $scrape, $matches);
$blockobj = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/tx/' . $matches[0]), true);
$lowblock = $blockobj['transaction']['first_seen'];


foreach ($scrape2['address']['transactions'] as $t) {
if($lowblock < $t['first_seen']){  
$trxn = $t['txid'];

$url = 'https://api.smartbit.com.au/v1/blockchain/tx/'. $trxn;
$obj = json_decode(file_get_contents($url), true);
$blocknum =  $obj['transaction']['block'];
$sender = $obj['transaction']['inputs'][0]['addresses'][0];
$confirmation=  $obj['transaction']['confirmations'];
$outputcount = $obj['transaction']['output_count'];


$amount = 0.0;
for ($x = 1; $x <= 20; $x++) {
for($i = 0; $i < $outputcount; $i++) {
if($obj['transaction']['outputs'][$i]['addresses'][0] === $addrrrr[$x] ){
  $amountp= $obj['transaction']['outputs'][$i]['value'];
  $amount = $amount + $amountp;
  $depositadd = $addrrrr[$x];
  $winamount = $x*$amount;
  $winamount = $winamount*0.98;
  $winroll = 98/$x;    
}}}
 
if($confirmation>0){
$url = 'https://api.smartbit.com.au/v1/blockchain/block/'.$blocknum;
$obj = json_decode(file_get_contents($url), true);
$blockhash =  $obj['block']['hash'];
$blocktime =  $obj['block']['time'];
$imphash = hash('sha512', $trxn.$blockhash);
}else{
$imphash = hash('sha512', $trxn);   
}
  
$roll_number_hex = substr($imphash, 0, 4);
$roll = hexdec($roll_number_hex);
$roll = $roll%(10000);
$roll = $roll/100;  

if($roll<$winroll){
if(0<$confirmation){

echo shell_exec("electrum payto $sender $winamount | electrum broadcast - ");
$response = sendMessage($sender,$winamount);  

}}

}}  



//
function sendMessage($input,$input2) {
    $content      = array(
        "en" => "Payout of $input2 BTC Done To $input"
    );
    $hashes_array = array();
    array_push($hashes_array, array(
        "id" => "view1",
        "text" => "View",
        "icon" => "http://i.imgur.com/N8SN8ZS.png",
        "url" => "https://skobet.herokuapp.com"
    ));
    $fields = array(
        'app_id' => "56e2278b-0156-4823-8c51-53b991849d78",
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'web_buttons' => $hashes_array
    );
    
    $fields = json_encode($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ZGY4ZTAyYTktYmRlNi00OTE1LWFmYzgtZjczZjBlZWE5ZjJl'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}
?> 
