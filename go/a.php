<?php
$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
// Check connection
if (!$conn) {
    die("Connection failed !!");
}

$sql = "SELECT bal FROM PY3gdINTnO.bal ";
$result = mysqli_query($conn, $sql);


$name = $conn->query("SELECT bal FROM PY3gdINTnO.bal LIMIT 1")->fetch_object()->bal; 


echo $name;

mysqli_close($conn);
?>
