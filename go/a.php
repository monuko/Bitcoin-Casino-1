
<?php
$servername = "remotemysql.com";
$username = "PY3gdINTnO";
$password = "VaAWRokqsj";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$sql = "SELECT bal FROM PY3gdINTnO.bal LIMIT 1";
$result = $conn->query($sql);


echo $result;
?>
