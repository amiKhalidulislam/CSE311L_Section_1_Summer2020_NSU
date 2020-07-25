<?php

$link = mysqli_connect('localhost','root','','JOB_MANAGEMENT');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE test_table(
    JOBid  VARCHAR(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    JOBtitle VARCHAR(35) NOT NULL UNIQUE,
    minSalary Number(10) ,
    maxSalary Number(10),
    
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not able to create Table." .mysqli_error($link);
}

mysqli_close($link)

?>