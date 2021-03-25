<?php
    $host = 'localhost';
    $dbname = 'E-commerce';
    $username = 'subhajit';
    $dbpassword = 'nahipata1234#';
    $conn = new mysqli($host, $username, $dbpassword, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>