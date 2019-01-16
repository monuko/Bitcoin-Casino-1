<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$trxn = htmlspecialchars($_GET["t"]);
$amount = 0.0;


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
  
  
  
$url = 'https://api.smartbit.com.au/v1/blockchain/tx/'. $trxn;
$obj = json_decode(file_get_contents($url), true);
$blocknum =  $obj['transaction']['block'];
$sender = $obj['transaction']['inputs'][0]['addresses'][0];
$confirmation=  $obj['transaction']['confirmations'];
$outputcount = $obj['transaction']['output_count'];

for ($x = 1; $x <= 20; $x++) {
for($i = 0; $i < $outputcount; $i++) {
  if($obj['transaction']['outputs'][$i]['addresses'][0] === $addrrrr[$x] ){
  $amountp= $obj['transaction']['outputs'][$i]['value'];
  $amount = $amount + $amountp;
  $depositadd = $addrrrr[$x];
  $winamount = $x*$amount;
  $winamount = $winamount*0.98;
  $winroll = 99/$x;    
}
}
} 


if($confirmation>0){
$url = 'https://api.smartbit.com.au/v1/blockchain/block/'.$blocknum;
$obj = json_decode(file_get_contents($url), true);
$blockhash =  $obj['block']['hash'];
$blocktime =  $obj['block']['time'];
$imphash = hash('sha512', hash('sha512',$trxn).hash('sha512',$blockhash)  );
}else{
$imphash = hash('sha512', $trxn);   
}

$roll_number_hex = substr($imphash, 0, 4);
$roll = hexdec($roll_number_hex);
$roll = $roll%(10000);
$roll = $roll/100;



// obeject creation
$myObj = new \stdClass();
$myObj->trxn = $trxn;
$myObj->amount= round($amount, 8);
$myObj->blocknum= $blocknum;
$myObj->winroll = $winroll;
$myObj->confirmation = $confirmation;
$myObj->sender= $sender;
$myObj->depositadd= $depositadd;
$myObj->roll = $roll;
$myObj->blockhash= $blockhash;
$myObj->blocktime= $blocktime;
$myObj->bethash= $imphash;  

if($roll<$winroll){
if(0<$confirmation){
 $myObj->result= '1';  
 $myObj->winamount= round($winamount, 8);
}else{
 $myObj->result= '0';    
 $myObj->winamount= 0;
}

    
}else{
 $myObj->result= '0';     
 $myObj->winamount= 0;    
}






$myJSON = json_encode($myObj);
echo $myJSON;

if($confirmation>3){
$fp = fopen($trxn.'.json', 'w');
fwrite($fp,$myJSON);
fclose($fp);
}

?>
