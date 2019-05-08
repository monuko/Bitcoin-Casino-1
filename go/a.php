<?php
$inrwin2 = $_GET["inrwin"];
$upi = $_GET["upi"];
$txnid = $_GET["txnid"];


$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
$sql = "SELECT bal FROM PY3gdINTnO.bal WHERE upi=$upi AND txnid=$txnid";
echo $sql;

$inramount2 = $conn->query($sql)->fetch_object()->bal; 
echo $inramount2;




mysqli_close($conn);
?>
