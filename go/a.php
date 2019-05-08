<?php
$inrwin2 = $_GET["inrwin"];
$upi = $_GET["upi"];
$txnid = $_GET["txnid"];

$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
$result = $conn->query("SELECT bal FROM PY3gdINTnO.bal WHERE upi='$upi' AND txnid=$txnid"); 
$inramount2 = $result ->fetch_object()->bal;
$ticketid = $result ->fetch_object()->ticketid; 


echo $inramount2;

if($ticketid<1){
echo "   CAN BET NOW";
}


mysqli_close($conn);
?>
