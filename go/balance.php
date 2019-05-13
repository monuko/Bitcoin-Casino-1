<?
$result =  file_get_contents("https://api.nicehash.com/api?method=balance&id=193027&key=9295f08b-d659-a348-7b1d-365539733937");
$obj = json_decode($result, true);

echo $obj['result']['balance_confirmed'];

?>
