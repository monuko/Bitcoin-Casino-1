<?
//pool check
$block = json_decode(file_get_contents("https://chain.api.btc.com/v3/block/latest"), true); 
$pool = $block['data']['extras']['pool_link'];

//nicehash get
$url = "https://api.nicehash.com/api?method=orders.get&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1";
$obj = json_decode(file_get_contents($url), true);

//logic
$limit = $obj['result']['orders'][0]['limit_speed'];
$id = $obj['result']['orders'][0]['id'];
$newlimit = $limit*1.1;









if (strpos($pool, 'slushpool') !== false) {
    echo 'RESET LIMIT';

$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=0.1" ;
$result =  file_get_contents($url2);
}else{
    
$url2 = "https://api.nicehash.com/api?method=orders.set.limit&my&id=193027&key=9295f08b-d659-a348-7b1d-365539733937&location=0&algo=1&&order=$id&limit=$newlimit" ;
$result =  file_get_contents($url2);

}    


echo $result;
?>

