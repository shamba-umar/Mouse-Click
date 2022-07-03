
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="dbclick";

//create connection

$conn=new mysqli($servername,$username,$password,$dbname);

//check connection

if ($conn->connect_error) {
	die("connection filed:"
 .$conn->connect_error);
}
// create database
$sql="create database click";

 if($conn->query($sql) ===TRUE){
    echo "database created successfully";
 } else {
    echo "Error creating database:".$conn->error;
 }

 $conn->close();
?>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbclick";

// create connection

$conn=new mysqli($servername,$username,$password,$dbname);
// check connection

if ($conn->connect_error){
    die("connection failed:"
.$conn->connect_error);

}

//sql to create table

$sql="create table 
contact
(First_Name varchar(10)primary key,Last_Name varchar(20),Enter_your_phone_number int,dob date,sex varchar(10),country varchar(20),subject varchar(30))";

if($conn->query($sql)===TRUE){
    echo"table contact created successfully";
}else{
    echo "Error creating table:".$conn->connect_error;
}
$conn->close();
?>