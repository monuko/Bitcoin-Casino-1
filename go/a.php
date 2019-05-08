<?php
$conn = mysqli_connect("remotemysql.com", "PY3gdINTnO", "VaAWRokqsj", "PY3gdINTnO");
// Check connection
if (!$conn) {
    die("Connection failed !!");
}

$sql = "SELECT bal FROM PY3gdINTnO.bal ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 echo "1 results";
} else {
    echo "0 results";
}

echo $result['bal'];

mysqli_close($conn);
?>
