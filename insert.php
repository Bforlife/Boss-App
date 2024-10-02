

<?php

require("connection.php");
if(insert){
    
    echo "<script> window.location= 'login.php'</script>";
}


    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $password = $_POST['password'];
    $comfirmpassword= $_POST['comfirmpassword'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $date= $_POST['date'];

   $insert=$conn -> query(" INSERT INTO tb_boss
   (firstname,
   lastname,
   email,
   password,
   comfirmpassword,
   date,
   gender)
   VALUES('$firstname',
   '$lastname',
   '$email',
   '$password',
   '$comfirmpassword',
   '$date',
   '$gender')");

   if($insert){
    echo 'inserted';
   }else{
    echo 'not inserted';
   }

  






?>