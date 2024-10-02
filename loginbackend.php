<?php 
    session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){

    require 'connection.php';
    $email= $_POST['email'];
    $pass= $_POST['password'];
    if($email== "" && $pass==""){
        header("location:login.php?msg=Fill in the missing field");
    }else{
        $sel = $conn->query("SELECT * FROM tb_boss WHERE email='$email' AND password='$pass' ");
        if($sel->num_rows>0){
            $row = $sel->fetch_assoc();
            $_SESSION['id']= $row['id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['lastname']= $row['lastname'];
            header("location:userdashboard.php");
        }else{
            header("location:login.php?msg=Incorrect email or password");
        }

    }
}
