<?php
$addrrrr=array(
    "14UD64ENDp8ALp17jpe7fXBh1k8jUxoV43",
    "14UD64ENDp8ALp17jpe7fXBh1k8jUxoV43",
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


$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcEiNk4KqoCzFJEfqDKkoyYZ1sEkJu3G4EKJVNczpNmUq9AYrdV8RJ4Swcd3N3CtBAZwat1RrqaQycG5wkZaVRCWQC5m6UiTL?filter=1#"); 
$scrape2 = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcEiNk4KqoCzFJEfqDKkoyYZ1sEkJu3G4EKJVNczpNmUq9AYrdV8RJ4Swcd3N3CtBAZwat1RrqaQycG5wkZaVRCWQC5m6UiTL?dir=asc&limit=111'), true);

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
  $winroll = 99/$x;    
}}}
 
if($confirmation>0){
$url = 'https://api.smartbit.com.au/v1/blockchain/block/'.$blocknum;
$obj = json_decode(file_get_contents($url), true);
$blockhash =  $obj['block']['hash'];
$blocktime =  $obj['block']['time'];
$imphash = hash('sha512',$blocknum.$blockhash.$trxn);
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
        "url" => "https://www.skobet.com"
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
