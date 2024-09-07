<?php

$hostname = "localhost";
$username = "root";
$passwd = "codereg25";
$dbname = "todo_app";

$conn = mysqli_connect($hostname, $username, $passwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Connection Failed";
    exit();
}