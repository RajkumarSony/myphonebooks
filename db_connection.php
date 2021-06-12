<?php
session_start();
session_regenerate_id(true);


$dbServer = 'remotemysql.com';
$dbUser = 'TYwiSXWJQK';
$dbPassword = 'DeJfmIgZLS';
$dbName = 'TYwiSXWJQK';

// change the information according to your database
$db_connection = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}