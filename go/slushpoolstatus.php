<meta http-equiv="refresh" content="170">

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

echo $j['confirmations'] . " -> "  . ($a[$i] -$a[$i-1]) . "<br>";

}
}

echo " Total Blocks $i";




if($a[1]>24){
?>


<audio controls autoplay>
  <source src="audio.mp3" type="audio/mpeg">
</audio>

<?
}
?>
