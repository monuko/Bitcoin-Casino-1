
Deposit Bitcoin to : 3GDtHsCx1PQgtA9mdvgC5MyPN4vHyrR6sZ<br><br>

Formula :<br>
=> roll = SHA512 of transaction Blockhash<br>
=> Roll * Bet Amount = Reputation<br>
Biggest Reputation Wins, When Latest Transaction Reach 500 Confirmation<br><br><br>
<table rules="cols">
  <tr>
    <th>Transaction Hash</th>
    <th>Roll</th>
    <th>Amount</th>
    <th>Reputation</th>
  </tr>



<?
$x = 0;
$bigrep = 0;
$obj = json_decode(file_get_contents("https://blockexplorer.com/api/addr/3GDtHsCx1PQgtA9mdvgC5MyPN4vHyrR6sZ/utxo"), true);



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

echo "  <tr>
<td>$trxn</td>
<td>$roll</td>
<td>$amount</td>
<td>$rep</td>
</tr>";

  
$x++;
} 

echo "</table>";


$url = 'https://api.smartbit.com.au/v1/blockchain/tx/'. $bigtrxn;
$obj = json_decode(file_get_contents($url), true);
$sender = $obj['transaction']['inputs'][0]['addresses'][0];

echo "<br><br>Current Winner : ". $sender . "  <br>Reputation : " . $bigrep . "  <br>Confirmation :  " . $conf;
?>
