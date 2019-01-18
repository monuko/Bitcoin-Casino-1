<?php
$scrape = file_get_contents("https://www.blockchain.com/btc/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?filter=1#"); 
$obj = json_decode(file_get_contents('http://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcEaiJEUfroC7RbmFjuJMWsTSj49Tv4uSEhcddGcWVyBKKQKCu4ZKHwFKYff66HdoJ3u97RF1yCAWAnGdtHsGFJYMVsfP6ypA?dir=asc&limit=111'), true);

$matches = array();
preg_match('/[a-fA-F0-9]{64}/', $scrape, $matches);
$blockobj = json_decode(file_get_contents('https://api.smartbit.com.au/v1/blockchain/tx/' . $matches[0]), true);
$lowblock = $blockobj['transaction']['first_seen'];


foreach ($obj['address']['transactions'] as $t) {

if($t['first_seen'] > $lowblock){  
$obj2 = json_decode(file_get_contents('https://skobet.herokuapp.com/api.php?t=' .$t['txid']), true);
 
echo $obj2['sender'];  
if($obj2['result']>0){  
$response = sendMessage($obj2['sender'],$obj2['winamount']);  
echo "electrum payto " .$obj2['sender']. " ". $obj2['winamount'] ."  | electrum broadcast - " ;
}
  
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
