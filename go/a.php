

<?php
$servername = "remotemysql.com";
$username = "PY3gdINTnO";
$password = "VaAWRokqsj";
$dbname = "PY3gdINTnO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT bal FROM PY3gdINTnO.bal ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 echo "1 results";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
