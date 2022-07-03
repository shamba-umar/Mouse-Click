<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mouseclick";


//create connection
$conn= new 
sql($servername,$username,$password,$dbname);


//check connection 

if($conn->connect_error) {
	die("connection failed: "
		.$conn->connect_error);

}

//sql to create table 
$sql ="create table 
contact (Name varchar(10)primary key,Email varchar(10),phone int,sex varchar(20),counntry varchar(20),message varchar(40))";

if($conn->query($sql) ===TRUE) {
	echo "Table contact created successfully";
}else{
	echo "Error creating table:".$conn->error;
}

$conn->close();
?>