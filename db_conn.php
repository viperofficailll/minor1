<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'flavordinds';

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn)
{
    echo "Could not connect to the database";
}