<meta http-equiv="refresh" content="555">



<?
$err = trim(file_get_contents('err.txt'));


$boonk = 0;
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
$obj5 = json_decode(file_get_contents("https://api.smartbit.com.au/v1/blockchain/blocks?limit=4"), true);


//vars
$paid = $obj9['result']['orders'][0]['btc_paid'];
$paidx = 1.21*$paid;


$limit = $obj9['result']['orders'][0]['limit_speed'];
$id = $obj9['result']['orders'][0]['id'];
$reward =  $obj['btc']['estimated_reward'] + $obj['btc']['unconfirmed_reward'] ;
$reward = $reward - $err;
//if block found
foreach($obj5['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$boonk = 1;
}}
//print details
echo "Limit -> $limit PH | Paid -> $paid | Reward -> $reward <br>";



//logics
if($boonk>0){
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=0.05" ;
$result =  file_get_contents($url2);
echo $result;
}


if( $reward > $paidx){
echo "In Profit <br> ";
}


if ( $boonk<1 && $reward < $paidx ){
$newlimit = $limit*1.21;
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
$result =  file_get_contents($url2);
echo $result;
}


echo $bal;
?>
