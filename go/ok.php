<meta http-equiv="refresh" content="300">

<?
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=50";
$obj9 = json_decode(file_get_contents($url), true);

foreach($obj9['blocks'] as $j){

echo $j['pool']['name'];
echo $j['confirmations'];
echo "<br>";

if(strcmp($j['pool']['name'], "SlushPool")){
echo "BOOONK<br>";
}
    
}
?>
