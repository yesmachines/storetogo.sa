<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $servername = "box5673.bluehost.com";
// $username = "bigleapt_cms";
// $password = "43lxyTGB-*FS";
// $database ="bigleapt_cms";

$servername = "box5673.bluehost.com";
$username = "bigleapt_cms";
$password = "43lxyTGB-*FS";
$database ="bigleapt_cms";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database ="bigleapt_cms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
