<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";

//create connection
$conn=new
mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error) {
	die("connection filed:"
. $conn->connect_error);
}
//sql to create tale
$sql="create table
 hospital(hospid varchar(10)primary key,hospname varchar(25),region varchar(20),town varchar(22))";
 if ($conn->query($sql)===true) {
 	echo "table hospital created successfully";
 } else {
 	echo "error creating table:".$conn->error;
 }
 $conn->close();
?>