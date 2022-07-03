<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="click";

//create connection
$conn=new
mysqli($servername,$username,$password,$dbname);
//check connection
if ($con->connect_error) {
    die("connection filed:"
. $conn->connect_error);
}
//sql to create tale
$sql="create table
 contact2
(Name varchar(10)primary key,Email varchar(20),phone int,sex varchar(10),country varchar(20),message varchar(30))";
 if ($conn->query($sql)===true) {
    echo "table contact created successfully";
 } else {
    echo "error creating table:".$conn->error;
 }
 $conn->close();
?>