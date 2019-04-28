<meta http-equiv="refresh" content="300">

<?
$i = 0;
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=100";
$obj9 = json_decode(file_get_contents($url), true);


foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
$i = $i+1;
$a[$i] = $j['confirmations'] ;

echo $j['confirmations'] . " -> " . $j['pool']['name'] . "<br>";

}
}

$p = ($a[1] + $a[2] + $a[3])/3;


echo "$p      Total Blocks $i -> %age of  " . (100/$i);
?>
