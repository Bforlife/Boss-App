
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
 require("connection.php");


$password= $_POST['old_password'];
$id= $_POST['id'];

if ($password=="") {
    header("location:change_password?info=Fill in the missing field");}
    else{
        $update =$conn ->query("UPDATE tb_boss SET password= '$password' WHERE id='$id'");
        if ($password=="$password") {
            header("location:change_password.php?infor=password sucessful ");
        }
    }



}



?>