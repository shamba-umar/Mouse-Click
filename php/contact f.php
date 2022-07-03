<?php 
$servername ="localhost";
$username= "username";
$password ="";
$dbname ="click";


//create connection 

$conn =new 
mysqli($servername,$username,$password,$dbname);

//check connection 


if ($conn->connect_error){
	die("connection failed:"
.$conn->connect_error);
}



$sql="INSERT INTO click(Name,Email,Phone,sex,country,message,VALUES ('umar abedi','shambaumarabedi@gmail.com','+256756782356','male','uganda','i need to  the replancement of a screen');
	if ($conn->query($sql)===TRUE){
		echo "New record created successfully";
		}else{
			echo "error:".$sql."<br>".$conn->error;
		}


		$conn->close
		?>