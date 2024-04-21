

<?php
$host = 'localhost'; 
$dbname = 'edoc'; 
$username = 'root'; 
$password = ''; 

$connection =  mysqli_connect($host, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
?>