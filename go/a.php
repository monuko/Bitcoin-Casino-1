<?php
$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
// Check connection
if (!$conn) {
    die("Connection failed !!");
}

$sql = "SELECT bal FROM PY3gdINTnO.bal ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 echo "111 results";
} 

echo $result;

mysqli_close($conn);
?>
