
<?php 

$servername = "localhost";
$username = " root";
$password = "";
$dbname = "mouseclick";

// Create connection
$conn = new mysqli($servername, $username , $password, $mouseclick);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE registration  (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(30) NOT NULL,
gender enum('m','f','o'),
email  VARCHAR(50) NOT NULL,
password int(50) NOT NULL,
repeatpassword int(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>

