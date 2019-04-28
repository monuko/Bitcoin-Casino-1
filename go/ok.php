<meta http-equiv="refresh" content="300">

<?
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=150";
$obj9 = json_decode(file_get_contents($url), true);

foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){

echo $j['confirmations'] . " -> " . $j['pool']['name'] . "<br>";

}
}
?>
