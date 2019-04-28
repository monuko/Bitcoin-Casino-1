<meta http-equiv="refresh" content="<? echo rand(1,300); ?>">



<?
$ab = 0;
$p = 0;
$s = 10000000;
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
if($p<$j['mining_duration']){
$p =  $j['mining_duration'];
}

if($s>$j['mining_duration']){
$s =  $j['mining_duration'];
}

$ab = $j['mining_duration'] + $ab;
}


$totalmine = $ab/15;
$x = $obj['btc']['round_duration'];





//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj9 = json_decode(file_get_contents($url), true);

//logic
$limit = $obj9['result']['orders'][0]['limit_speed'];
$id = $obj9['result']['orders'][0]['id'];


$result = $limit;
$rlimit = 0.5;

if($obj['btc']['luck_b10'] < 1){
$temp = (1 - $obj['btc']['luck_b10']);
$rlimit = $rlimit * ((1 + $temp)*3) ;

}

if($obj['btc']['luck_b50'] < 1){
$temp = (1 - $obj['btc']['luck_b50']);
$rlimit = $rlimit * ((1 + $temp)*3) ;
}

if($obj['btc']['luck_b10'] > 1){
$temp = $obj['btc']['luck_b10']*2.4;
$rlimit = $rlimit/$temp;

}

if($totalmine < $x ){
$rlimit = $rlimit * 1.33;
}



//$newlimit = $obj['btc']['round_probability'] * $rlimit;
$newlimit = 1.01 * $rlimit;

if($newlimit<0.05){
$newlimit = 0.1;
}
 
//$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
//$result =  file_get_contents($url2);


///////////////////////////
if($obj['btc']['luck_b10'] < 1){
echo "<img src=http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/star-icon.png />";
}

if($obj['btc']['luck_b10'] < 0.88){
echo "<img src=http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/star-icon.png />";
}

if($obj['btc']['luck_b10'] < 0.75){
echo "<img src=http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/star-icon.png />";
}

if($obj['btc']['luck_b50'] < 1){
echo "<img src=http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/star-icon.png />";
}

if($totalmine < $x ){
echo "<img src=http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/star-icon.png />";
}


echo "<br> ______________________________________" ;
echo "<br> Current Luck " . $obj['btc']['round_probability'];
echo "<br> 10 Luck " . $obj['btc']['luck_b10'];
echo "<br> 50 Luck " . $obj['btc']['luck_b50'];
echo "<br> Avg Block $totalmine Sec";
echo "<br> No Block From Last  $x Sec";
echo "<br> Longest Block Yet $p Sec";
echo "<br> Short Block Yet $s Sec";
echo "<br> Limit to Set : $newlimit";
echo "<br> RESULT :  $result";
?>

