<?php
    $servername = 'localhost';
    $username = 'root';
    $password ='';
    $dbname='myshopdb';
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_set_charset($conn,'UTF8');
    if($conn->connect_error){
        echo "Kết nối thất bại";
    }
?>