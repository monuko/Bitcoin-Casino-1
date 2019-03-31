<?
$i = 0;
$p = 0;
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

foreach($obj['btc']['blocks'] as $j){
if($i<10){
$p = $p + $j['mining_duration'];
}
$i = $i+1;
}



$conn = mysqli_connect('remotemysql.com', 'PY3gdINTnO', 'VaAWRokqsj', 'PY3gdINTnO');
foreach($obj['btc']['blocks'] as $j){

$j1 = $j['date_found'];
$j2 = $j['mining_duration'];
$j3 = "0";

$sql = "INSERT INTO part (date_found, mining_duration, luck) VALUES ('$j1', '$j2', '$j3') ";
mysqli_query($conn, $sql);

}
?>



