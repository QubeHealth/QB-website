<?php
$servername = "localhost";
$username = "username";
$password = "password";

// 'username' => 'root',
// 'password' => 'Webster@1234',
// 'database' => 'qubehealth',

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}