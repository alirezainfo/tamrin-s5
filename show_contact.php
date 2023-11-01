<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facilitystore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `user_id`, `password`, `firstname`, `lastname`, `email`, `phone`, `address`, `is_delete` FROM `user`"

if ($result->num_rows > 0) {
  // output data of each row
  
  $table = $result->fetch_all(MYSQLI_ASSOC);


  }

  else {
  echo "0 results";

}
$conn->close();

echo json_encode($table)
?> 