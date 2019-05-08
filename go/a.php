<?php
$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
// Check connection
if (!$conn) {
    die("Connection failed !!");
}


$name = $conn->query("SELECT bal FROM PY3gdINTnO.bal LIMIT 1")->fetch_object()->bal; 


echo $name;

mysqli_close($conn);
?>
