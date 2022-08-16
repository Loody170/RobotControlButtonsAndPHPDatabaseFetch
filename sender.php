<?php

$command = $_POST["btn"];
$str = (String)$command;



$host = "localhost";
$dbname = "robotvalues_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
    die("connection eror: " . mysqli_connect_error());
}

$sql = "INSERT INTO Commands (command) VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s", $str);
mysqli_stmt_execute($stmt);

echo "The robot changed position to ". $command;
?>
