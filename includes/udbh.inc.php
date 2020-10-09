<?php

$dbhost=getenv('host');
$dbuser=getenv('user');
$dbpass=getenv('pass');
$dbname=getenv('name');

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>
