<meta http-equiv="refresh" content="<? echo rand(1,711); ?>">



<?
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

$reward =  $obj['btc']['estimated_reward'] + $obj['btc']['unconfirmed_reward'];

//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj9 = json_decode(file_get_contents($url), true);

$paid = $obj9['result']['orders'][0]['btc_paid'];
$limit = $obj9['result']['orders'][0]['limit_speed'];
$id = $obj9['result']['orders'][0]['id'];

$obj5 = json_decode(file_get_contents("https://api.smartbit.com.au/v1/blockchain/blocks?limit=5"), true);


foreach($obj5['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$boonk = 1;
}}


if($boonk>0){
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=0.05" ;
$result =  file_get_contents($url2);
echo $result;
}


echo "Limit -> $limit PH | Paid -> $paid | Reward -> $reward <br>";
$paidx = 1.1*$paid;

if( $reward > $paidx){

echo "In Profit <br> ";

}else{

if($boonk<1){

$newlimit = $limit*1.1;
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
$result =  file_get_contents($url2);
echo $result;

}}



?>
