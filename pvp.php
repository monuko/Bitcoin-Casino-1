<?
$x = 0;
$bigrep = 0;
$obj = json_decode(file_get_contents("https://blockexplorer.com/api/addr/3GDtHsCx1PQgtA9mdvgC5MyPN4vHyrR6sZ/utxo"), true);


echo "UNDER DEVELOPMENT, DO NOT BET    <br>";


while($x < count($obj)) {
$trxn =  $obj[$x]['txid'];
$blocknum =   $obj[$x]['height'];
$amount = $obj[$x]['amount'];
  

$url2 = 'https://blockexplorer.com/api/block-index/'.$blocknum;
$obj2 = json_decode(file_get_contents($url2), true);
$blockhash =  $obj2['blockHash'];

$imphash = hash('sha512', $blockhash);
$roll_number_hex = substr($imphash, 0, 4);
$roll = hexdec($roll_number_hex);
$roll = $roll%(10000);
$rep = $amount * $roll;

if($bigrep < $rep){
$bigrep = $rep;  
$bigtrxn = $trxn;
$conf = $obj[$x]['confirmations'];
}  

echo "$trxn | $roll x $amount = $rep <br>";
$x++;
} 

$url = 'https://api.smartbit.com.au/v1/blockchain/tx/'. $bigtrxn;
$obj = json_decode(file_get_contents($url), true);
$sender = $obj['transaction']['inputs'][0]['addresses'][0];

echo "<br><br>Current Winner : ". $sender . "  <br>Reputation : " . $bigrep . "  <br>Confirmation :  " . $conf;
?>
