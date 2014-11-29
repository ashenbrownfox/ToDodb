<?php
$connection = mysqli_connect('localhost','root',null,'todoDb');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
