<?


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

$reward =  $obj['btc']['estimated_reward'];


//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj9 = json_decode(file_get_contents($url), true);

$paid = $obj9['result']['orders'][0]['btc_paid'];


if($reward> $paid){
echo "In Profit";
}
?>
