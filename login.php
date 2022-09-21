<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['email'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);
    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($email)){

        header("Location: index.php?error=email is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND email='$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['email'] === $email  && $row['password'] ===$pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or email");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or email");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}