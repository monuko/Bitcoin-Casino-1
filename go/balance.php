<meta http-equiv="refresh" content="99">

<style>
div {
	width: 700px;
	height: 200px;	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;

        font-size: 90px;

}
</style>


<div>


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
$obj9 = json_decode($server_output, true);




$result =  file_get_contents("https://api.nicehash.com/api?method=balance&id=193027&key=9295f08b-d659-a348-7b1d-365539733937");
$obj = json_decode($result, true);
$bal = $obj['result']['balance_confirmed'] + $obj['result']['balance_pending'] + $obj9['btc']['estimated_reward'] + $obj9['btc']['unconfirmed_reward'] ;


$result2 =  file_get_contents("https://blockchain.info/ticker");
$obj = json_decode($result2, true);
$inr = $obj['INR']["15m"];

$c= $inr * $bal;
$c= round($c);
$profit = $c*0.0058;
$profit= round($profit);



echo "$bal BTC <br> $c INR <br> $profit INR/MONTH";
?>


</div>
