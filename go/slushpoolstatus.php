<meta http-equiv="refresh" content="70">

<?
$i = 0;
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=300";
$obj9 = json_decode(file_get_contents($url), true);


$obj2 = json_decode(file_get_contents("https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1"), true);
$limit = $obj2['result']['orders'][0]['limit_speed'];
$id = $obj2['result']['orders'][0]['id'];



foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$i = $i+1;
$a[$i] = $j['confirmations'] ;

echo  $a[$i] . " -> "  . ($a[$i] -$a[$i-1]) . "<br>";

}
}

echo " Total Blocks : $i <br>";






$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://slushpool.com/accounts/profile/json/btc/");
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
$obj9 = json_decode(file_get_contents("https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1"), true);


//vars
$paid = $obj9['result']['orders'][0]['btc_paid'];
$limit = $obj9['result']['orders'][0]['limit_speed'];
$reward =  $obj['btc']['estimated_reward'] ;


//print details
echo "Limit -> $limit PH <br>";
echo "Paid -> $paid  <br>";
echo "Reward -> $reward <br>";
echo $reward/$paid  ."     - Profit Ratio<br>";
echo ($reward-$paid)  ."     - Profit BTC<br>";
?>
