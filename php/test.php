
<?php 
$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$password =$_POST['password'];
$repeatpassword =$_POST['repeat password'];
$number =$_POST['number'];
// database  connection
$conn= new mysqli('localhost','root','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration(firstName,lastName,gender,email,password,repeat password,number )
    Value(?,?,?,?,?,?,?)") {
        $stmt->bind_param("sssssi", $firstName,$lastName, $gender,$email,$password,$repeatpassword,$number);
     $stmt->execute();
        echo "registration successfully.....";
        $stmt->close();
        $stmt->close();
    }
}

?>

