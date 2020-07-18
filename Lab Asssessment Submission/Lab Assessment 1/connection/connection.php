<?php

$MySQLi_connection = new MySQLi('localhost','root','','mydatabase');

if($MySQLi_connection->connect_error)
{

    echo "not Connected,error:" .$MySQLi_connection->connect_error;
}

else
{       
    echo "Connected";

}

?>