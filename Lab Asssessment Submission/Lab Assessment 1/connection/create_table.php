<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("error: could not connect." .mysqli_connect_error());

}

$sql ="CREATE TABLE test_table{
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usename VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(225) NOT NULL,
    created_at DATETIME DEFULT CURRENT_TIMESTAMP
}";

