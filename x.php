<?php
$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?filter=1#"); 
$obj = json_decode(file_get_contents('http://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=asc&limit=999'), true);

$matches = array();
preg_match('/[a-fA-F0-9]{64}/', $scrape, $matches);
$blockobj = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/tx/' . $matches[0]), true);
$lowblock = $blockobj['transaction']['first_seen'];


foreach ($obj['address']['transactions'] as $t) {

if($t['first_seen'] > $lowblock){  
$obj2 = json_decode(file_get_contents('http://btcjua.com/api.php?t=' .$t['txid']), true);
  
if($obj2['result']>0){  
echo "electrum payto " .$obj2['sender']. " ". $obj2['winamount'] ."  | electrum broadcast - " ;
}}

}

?> 