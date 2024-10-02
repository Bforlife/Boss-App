<?php

require("connection.php");

// create table

$tb_boss = $conn -> query(" CREATE TABLE if not exists tb_boss
( id int(11) primary key not null auto_increment,
firstname varchar(100) not null,
lastname varchar(100) not null,
email varchar(100) not null,
password varchar(100) not null,
comfirmpassword varchar(100) not null,
date varchar(100) not null,
gender varchar(100)not null)
ENGINE=innoDB");

if($tb_boss){
    echo "tb_boss created";
}else{
    echo "tb_boss not created";
}



?>