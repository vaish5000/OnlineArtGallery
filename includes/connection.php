<?php 
$servername = "localhost:3325";
$uname = "root";
$password1 = "";
$dbname = "online_art_gallery_database_final";

// Create connection
 $conn = mysqli_connect($servername, $uname, $password1, $dbname);
 // Check connection
  if (!$conn) {
    die("Con failed: " . mysqli_connect_error());
}
?>