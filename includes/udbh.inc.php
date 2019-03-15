<?php

$dbhost="localhost";
$dbuser="id8377155_20prince12";
$dbpass="Jalicno123";
$dbname="id8377155_prince";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>
