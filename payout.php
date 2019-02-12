<?php
$addrrrr=array(
    "00",
    "00",
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "14kX8t11jWXGVgQU5Uy97pnwvT4E54znmp",
    "1562ws57S8BxnWyAgTSuR3Y4SNDkoR5p9B",
    "15FG48J3vJR8nV9CmAwx3ScZP25sTBQhb9",
    "15m2yG8s4zmymjfH3D4gnkvDwCNN94oQhh",
    "15tzbEb4qkZZ8reUUEdvvPRfEBNLCBJJQ7",
    "161RkFzd6fQbkov7GSjg7Xx7FhDexyZW5a",
    "168vnBonda2sUb8nRYm83NZcSmtsjxc5aN",
    "17RbxMuun5cEnbK5emECYQeqPNDvoNtbd",
    "17Tx6ozt3jumtfMSEm37MWiFzacc8wjxwW",
    "18td87U1ZzYtGcJL2CJNuNWwKb1TDxRd9d",
    "19TUrWn8JXU4eQBgtnxZC5EPDyEW7n9b8g",
    "1AyfJaXioXg5Mj1NeGBV6gywr9mfJE9drJ",
    "1BM6bNvRxSZxUBpa73sx8SR5Wnpj4EdaJn",
    "1CMMpRY5WULMBi38FHKAvKX56tj2zg5WUP",
    "1DaFSBxwtNAceuVFtqKW4wX3GRUBopDsPm",
    "1FcRk9EZhCd5GzwhEauo6E62rqKGPT55Yb",
    "1FebKkwvenTUn6tr6QZ85sECiWnYjVUSoe",
    "1FrGra9hJxhLZBdSUxBRPa2kE2byPKFckz",
    "1GeepMWBrk2WqAsePmtUYLjz5mVmYe55op",
    "1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H",
    "1Hk1WHuhH3HK88vHLGFiy73ssYthPDKpJp",
    "1HxQc9AUiPovQYBJx4vi13g7WUcki7CVUW",
    "1JBcELusCqjB84FnLPwRET5W7YXWt6ACsF",
    "1JT34AYyqQ5MT7GBT5MceyAvhkkqbE8QLY",
    "1JrYAa8HhDzdN1tbiS75VvXk5bZUXbsPEW",
    "1KNsmtUSRHp9eoFypjjN8swG6Y43akobuG",
    "1Kr7UY5pzH1yjBim8pHgfapi1kfuRtQXsd",
    "1LGXCYKL4mwxdUiBKqFMvw1SR8VWePXS59",
    "1LHm5bfuabK8tvCH7ej7CN7BuYRBQFBiZ",
    "1LvnnoC4nCcc5N55i6SeTpd6wZSrkNS5V",
    "1MZCeDGiXvq9ewXnvQs7u664yYnai9KPi5",
    "1MdsKwmLE4UfdtJmwsdpTbLA61aFDxHo5N",
    "1MmjZsoZZjrmHwy5R4svVs1AYCmf6DvVkr",
    "1MyHEvezvUPAzkdUDRKt6T5Xgp8xgj6gLQ",
    "1Nb7KqtNyXSmcj2YdJqr2nMQPASpUqV6Xh",
    "1PFHPUEk5mkJcTUs375XvmNC6pmnd44tSq",
    "1Q5zHQiCz34gauntDMRh9Z9duXjrya3JJr",
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
  $winamount = $winamount*0.99;
  $winamount = ($winamount - 0.00001);

  $winroll = 99/$x;    
}}}
 
if($confirmation>0){
$url = 'https://api.smartbit.com.au/v1/blockchain/block/'.$blocknum;
$obj = json_decode(file_get_contents($url), true);
$blockhash =  $obj['block']['hash'];
$blocktime =  $obj['block']['time'];
$imphash = hash('sha512', hash('sha512', $trxn) . hash('sha512', $blockhash) . hash('sha512', $blocknum) );
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
}}

}}  

?> 
