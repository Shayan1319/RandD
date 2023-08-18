<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="zoo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
 ?>
 <script>
      alert("Sorry not conect to database");
 </script>
 
 <?php
}
?>