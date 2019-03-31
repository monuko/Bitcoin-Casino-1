<?
$p = 0;
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

if($obj['btc']['luck_b10'] < 1){
echo "MOKA HE   ";
}

if($obj['btc']['luck_b50'] < 1){
echo "Chode LE   ";
}



foreach($obj['btc']['blocks'] as $j){
if($p<$j['mining_duration']){
$p =  $j['mining_duration'];
}

echo "<br> Longest Block Yet $p Sec";

}



?>
