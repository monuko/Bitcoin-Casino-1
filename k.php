<?
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://slushpool.com/stats/json/btc/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$vars); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'SlushPool-Auth-Token: 6KYLH8Dz5Vo6qFNo'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec($ch);
curl_close($ch);
$obj = json_decode($server_output, true);

print   $obj['btc']['round_duration'];


$conn = mysqli_connect('remotemysql.com', 'PY3gdINTnO', 'VaAWRokqsj', 'PY3gdINTnO');

foreach($obj['btc']['blocks'] as $j){

$sql = "INSERT INTO part (blocknum, time, duration) VALUES ($j->date_found, '1', '1')";
mysqli_query($conn, $sql);

}


mysqli_close($conn);


?>



