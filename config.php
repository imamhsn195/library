<?php
    $host = 'localhost';
    $db_name = 'library';
    $db_user = 'root';
    $db_password = '';
    $con = new mysqli($host, $db_user, $db_password, $db_name);
    if($con->connect_error){
        echo "DB connection faild.\n";
    }else{
        echo "DB connected successfully.\n";
    }
?>