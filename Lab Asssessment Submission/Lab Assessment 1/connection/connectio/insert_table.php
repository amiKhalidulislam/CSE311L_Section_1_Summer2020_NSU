<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("error: could not connect." .mysqli_connect_error());

}

$sql ="INSERT INTO test_table(id,username,password) VALUES
{
}";

if (mysqli_query($link.$sql))
{
    
}