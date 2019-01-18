<?php
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


$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?filter=1#"); 
$scrape2 = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?dir=asc&limit=111'), true);

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

echo shell_exec('electrum getbalance');
echo shell_exec("electrum payto $sender $winamount ");

}}

}}  
?> 
