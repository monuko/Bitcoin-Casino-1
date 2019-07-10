<table>
<?
$url = "https://api.smartbit.com.au/v1/blockchain/blocks?limit=999";
$obj9 = json_decode(file_get_contents($url), true);

foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
echo  "<tr><td>" .$j['height'] . "</td></tr>";
}
}




$url = $obj9['paging']['next_link'];
$obj9 = json_decode(file_get_contents($url), true);
foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
echo  "<tr><td>" .$j['height'] . "</td></tr>";
}
}

$url = $obj9['paging']['next_link'];
$obj9 = json_decode(file_get_contents($url), true);
foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
echo  "<tr><td>" .$j['height'] . "</td></tr>";
}
}

$url = $obj9['paging']['next_link'];
$obj9 = json_decode(file_get_contents($url), true);
foreach($obj9['blocks'] as $j){
if(!strcmp($j['pool']['name'], "SlushPool")){
echo  "<tr><td>" .$j['height'] . "</td></tr>";
}
}


?>
</table>
