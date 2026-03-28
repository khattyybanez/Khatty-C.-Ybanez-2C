<?php
$host = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "socmed_ybanez";

$con = new mysqli($host, $username, $dbpassword, $dbname);
$conn = mysqli_connect("localhost", "root", "", "socmed_ybanez");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>