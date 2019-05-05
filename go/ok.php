<meta http-equiv="refresh" content="170">

<?
$i = 0;
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=300";
$obj9 = json_decode(file_get_contents($url), true);


foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$i = $i+1;
$a[$i] = $j['confirmations'] ;

echo $j['confirmations'] . " -> " . $j['pool']['name'] . "<br>";

}
}


$p = $a[1]/10;

if($p>1.7){
$p = $a[1]/8;
}  

if($p>2.3){
$p = $a[1]/7;
}  



//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj9 = json_decode(file_get_contents($url), true);
$id = $obj9['result']['orders'][0]['id'];

//nicehash set order
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$p" ;
$result =  file_get_contents($url2);






echo "$p PH/s  <br>   Total Blocks $i";
?>
