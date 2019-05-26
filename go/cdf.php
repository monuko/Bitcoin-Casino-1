<?

$ss = 99;
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
$cdf = $obj['btc']['round_probability'];


$objx = json_decode(file_get_contents("https://api.smartbit.com.au/v1/blockchain/blocks?limit=200"), true);
$obj9 = json_decode(file_get_contents("https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1"), true);
$id = $obj9['result']['orders'][0]['id'];


foreach($objx['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
if($ss>$j['confirmations']){
$ss = $j['confirmations']/10;
}
}
}


if($cdf<0.05){
$cdf = 0.05;
}


if($ss>1){
$newlimit = $cdf * $ss;
}else{
$newlimit = $cdf;
}

echo $newlimit;
//$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
//$result =  file_get_contents($url2);

//echo $result;
?>
