<meta http-equiv="refresh" content="70">

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




echo "Total Blocks $i";
?>

