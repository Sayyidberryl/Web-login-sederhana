<?php
$conn = mysqli_connect("localhost", "root", "", "tes_login");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>