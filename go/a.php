<?
$conn = mysqli_connect('remotemysql.com', 'PY3gdINTnO', 'VaAWRokqsj', 'PY3gdINTnO',3306);



//$sql = "UPDATE PY3gdINTnO.bal SET bal=bal-$inramount2 WHERE upi=$upi AND txnid=$txnid LIMIT 1";
$sql = "SELECT bal FROM PY3gdINTnO.bal LIMIT 1";

$result = mysqli_query($conn, $sql);



echo $result;

?>
