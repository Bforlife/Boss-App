<?php

require("connection.php");

// create database

$db_boss =$conn->query("CREATE DATABASE db_boss");

if($db_boss){
    echo "db_boss created<br>";

}else{
    echo "db_boss not created";
}


?>