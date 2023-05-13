<?php

    $email =$_POST['email'];
    $password = $_POST['password'];
    // echo $email;

    // database connection
    $con = new mysqli('localhost','root','','travelweb');

    if($con-> connect_error){
        die('Failed to connect: '.$con->connect_error);
    }
    else{
        $stmt = $con->prepare('select * from login where email =?');
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt_result = $stmt -> get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result -> fetch_assoc();
            if($data['password']=== $password){
                // echo "Login Successful";
                header("Location:admin_dashboard.php");
            }
            else{
                echo "Invalid Email and password";
            }
        }
        else{
            echo "Invalid Email and password";
        }
        
    }
?>