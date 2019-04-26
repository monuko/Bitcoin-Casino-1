<meta http-equiv="refresh" content="<? echo rand(1,99); ?>">



<?
$ab = 0;
$p = 0;
$s = 10000000;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://slushpool.com/stats/json/btc/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$vars); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$headers = [
    'SlushPool-Auth-Token: 6KYLH8Dz5Vo6qFNo'
];


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec($ch);
curl_close($ch);
$obj = json_decode($server_output, true);


foreach($obj['btc']['blocks'] as $j){
if($p<$j['mining_duration']){
$p =  $j['mining_duration'];
}

if($s>$j['mining_duration']){
$s =  $j['mining_duration'];
}

$ab = $j['mining_duration'] + $ab;
}


$totalmine = $ab/15;
$x = $obj['btc']['round_duration'];


if($obj['btc']['luck_b10'] < 1){
echo "Moka He  ";
}


if($obj['btc']['luck_b50'] < 1){
echo "Chod Le.. ";
}

if($totalmine < $x ){
echo "Zor Se.. ";
}


echo "<br> ______________________________________" ;
echo "<br> Current Luck " . $obj['btc']['round_probability'];
echo "<br> 10 Luck " . $obj['btc']['luck_b10'];
echo "<br> 50 Luck " . $obj['btc']['luck_b50'];

echo "<br> Avg Block $totalmine Sec";
echo "<br> No Block From Last  $x Sec";
echo "<br> Longest Block Yet $p Sec";
echo "<br> Short Block Yet $s Sec";



//pool check
$block = json_decode(file_get_contents("https://chain.api.btc.com/v3/block/latest"), true); 
$pool = $block['data']['extras']['pool_link'];

//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj9 = json_decode(file_get_contents($url), true);

//logic
$limit = $obj9['result']['orders'][0]['limit_speed'];
$id = $obj9['result']['orders'][0]['id'];


$result = $limit;
$rlimit = 0.2;

if($obj['btc']['luck_b10'] < 1){
$rlimit = $rlimit + 0.2;
}

if($obj['btc']['luck_b50'] < 1){
$rlimit = $rlimit + 0.2;
}

$spclvar = $obj['btc']['round_probability'] * 2.4;

//$newlimit = $limit*1.1;
$newlimit = ($rlimit + $spclvar)/2 ;

if(rand(1,10)<2){    
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
$result =  file_get_contents($url2);
}    


if($obj['btc']['luck_b10'] > 0.9){
if (strpos($pool, 'slushpool') !== false) {

$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=0.1" ;
$result =  file_get_contents($url2);
}
}


echo "<br> limit to Set : $newlimit";
echo "<br> if Block Found, then limit : $rlimit";
echo "<br> Current Bid $result";
?>

