<?php
require("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
 
session_start();

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$id= $_POST['id'];
$password= $_POST['password'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$date= $_POST['date'];

$update =$conn ->query("UPDATE tb_boss SET firstname='$firstname',lastname='$lastname', password= '$password', email='$email',gender='$gender',date='$date' WHERE  id='$id'");

// if ($update) {
//     header("location:updateform?info=Fill in the missing field");


// }
// else{
//      header("location:updateform.php?infor=Update succesful");

// }
}






?>