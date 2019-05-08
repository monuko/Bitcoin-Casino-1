<?


$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO",3306);
$sql = "UPDATE PY3gdINTnO.bal SET bal=bal-$inramount2 WHERE upi=$upi AND txnid=$txnid LIMIT 1";
$sql2 = "SELECT bal FROM PY3gdINTnO.bal WHERE upi=$upi AND txnid=$txnid LIMIT 1";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

$row=mysql_fetch_row($result2);

if($row[0] >= 0) {
echo " HELLO SIR";
}


?>
