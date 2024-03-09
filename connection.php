<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$tampil = mysqli_query($conn, "SELECT * FROM ucapan ORDER BY id DESC");
