<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$trxn = htmlspecialchars($_GET["t"]);
$amount = 0.0;


$addrrrr=array(
    "00",
    "00",
    "1934No2n9Rx2Xxem49WnS8FEuPZtdon9WV",
    "19pey1UUWvvu17DLGXQomSVAnqoWGLPNrR",
    "1AbXWU92jbX7548RdLorw3Ya147X9nPqfz",
    "1CpJxcnS1X1AW2xVT3mwWsh6mCcPue7LcS",
    "1DtF21Na1AoQZdXPVCg5BLhuPhVU5xeEbg",
    "1EM49SKjeRNqXFmwhKbYqPaXenCroFRcHz",
    "1Ewa6qiK4MMZt4eiC9fMNRh3ytEKismMFn",
    "1FtJusHG8M4e8fu67EccQhDMFJUA8o16sW",
    "1GNvQZw8ig1cy2avWJv2FuMA8yKasuTy94",
    "1GiSya3dupzspyY1cT7KgUqiRBmK82ccGk",
    "1HjWuh7s6BeziKTTNusFwKSWouME57tBLv",
    "1JRMkpMfb7dwaNZof4hhHCQmKkHsbV7Fuy",
    "1JYt4AtzSqWh7uYL4QrsiTFjLVEBq9hNEo",
    "1MYHGU9f3Yn5TdsqRzH539FD7MVzw2GimU",
    "1NuYrKRA4XpEx44Mwz7v7mDV96VLTwWqZR",
    "1PKobUyAM54shkbHKAEAnK551BhqGxUKVu",
    "1PZPkGRkJSJmnxkvKyBswLLEZRVrEJpLpF",
    "1Q8cpiRb136xbXMQ9m8c4UtQHmrn59mKJH",
    "1V7L2QKLuZ1m7PNFfHAcR2ddnwoZBqhTk"
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
  $winamount = $winamount*0.99;
  $winroll = 99/$x;    
}
}
} 




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

if($confirmation>1){
$fp = fopen($trxn.'.json', 'w');
fwrite($fp,$myJSON);
fclose($fp);
}

?>
