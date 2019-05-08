<?php
$inrwin2 = $_GET["inrwin"];
$upi = $_GET["upi"];
$txnid = $_GET["txnid"];


$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
$inramount2 = $conn->query("SELECT bal FROM PY3gdINTnO.bal WHERE  upi=". $upi." AND txnid=".$txnid." LIMIT 1")->fetch_object()->bal; 
echo $inramount2;

if($inramount2>0){
$conn->query("DELETE FROM PY3gdINTnO.bal WHERE upi=".$upi." AND txnid=".$txnid); 
echo "  DELETED ";
}


mysqli_close($conn);
?>
