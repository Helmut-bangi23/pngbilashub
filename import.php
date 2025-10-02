<?php
$conn = new mysqli(getenv('MYSQLHOST'), getenv('MYSQLUSER'), getenv('MYSQLPASSWORD'), getenv('MYSQLDATABASE'), getenv('MYSQLPORT'));
$sql = file_get_contents('ecommercedb.sql');
if ($conn->multi_query($sql)) echo "Database imported!";
else echo "Error: " . $conn->error;
?>
