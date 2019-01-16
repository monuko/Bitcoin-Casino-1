<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$trxn = htmlspecialchars($_GET["t"]);
$amount = 0.0;


$addrrrr=array(
    "12bVL3vifQ3rEx3Uir29hi8ktYa3jnHS17",
    "12bVL3vifQ3rEx3Uir29hi8ktYa3jnHS17",
    "12nSYw8kzhUs1Aha1WDFBvWygEK6JEYf1v",
    "14X3oKrnav4MH6QH9HhaBxbFiSW3HZDeV6",
    "15vzMxo3r36haZW2njT7co3L4wXnUBpdoo",
    "16odq3C41fM6znji8q4bjMutdqRPDo9Zsz",
    "188KgfZVbHkKu9WwuPg5YmG7a3LeQtuiE3",
    "1AAaWxpoDr8uJ6uzhEfk1MMc7dyRHCcQRN",
    "1AFfqw5BrfpA8Xj8J6MkF9m97vtgjFZBQf",
    "1AhyUfzuGrVqtTwqffMydkqY32eEvkxZLu",
    "1Bd7tRzdq9ih7oTpsB4zabrQTGN14LY6HZ",
    "1Bs45QCxHgZ6NFuhC3gNaW4KeYuGpiStz5",
    "1D4N7AERrAYDxRapCUpny8fWkWoiGPugWP",
    "1FeKeJ8GffSdN642Z45X2CtDv8Fsge4SSk",
    "1GbqXKQLA2DKMXgfXXymtDNZbb8NMpSxyZ",
    "1K4p6MpMqYVZBadZnL4ERRd7uNVwgbVchP",
    "1KAt4uSWn8eWu6ud2uXDatqLnGuQiJh1g2",
    "1LY8C9E8t3JV4PPEBqdNEFAFcUGGPpudwK",
    "1LdkAT9YCtPPp5pL9TsddxR61XAtHzEYzB",
    "1Lvfu9u3ZJ5n71WVVvq8Q82DC5Zwoea4nZ",
    "1X3ZSwKoPujJMwBWCVFkyEoRh37qccRt5"
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
  $winroll = 98/$x;    
}
}
} 


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
