<meta http-equiv="refresh" content="170">

<?
$i = 0;
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=200";
$obj9 = json_decode(file_get_contents($url), true);


$obj2 = json_decode(file_get_contents("https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1"), true);
$limit = $obj2['result']['orders'][0]['limit_speed'];
$id = $obj2['result']['orders'][0]['id'];



foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$i = $i+1;
$a[$i] = $j['confirmations'] ;

echo $j['confirmations'] . " -> " . $j['pool']['name'] . "<br>";

}
}

//logic
$p = $a[1]*0.07;




if($a[1]>15){

$newlimit = $p*2.2;
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
$result =  file_get_contents($url2);
}else{
//nicehash set order
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$p" ;
$result =  file_get_contents($url2);
}  





echo "$p PH/s  <br>   Total Blocks $i <br>";
echo $result;
?>
