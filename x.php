<?php
$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?filter=1#"); 
$scrape2 = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?dir=asc&limit=111'), true);


$matches = array();
preg_match('/[a-fA-F0-9]{64}/', $scrape, $matches);
$blockobj = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/tx/' . $matches[0]), true);
$lowblock = $blockobj['transaction']['first_seen'];



foreach ($scrape2['address']['transactions'] as $t) {
if($t['first_seen'] > $lowblock){  

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
echo "electrum payto $sender $winamount ";
}}

}}  
?> 
