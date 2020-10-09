<?php
require "includes/udbh.inc.php";



if($_GET['code'])
{
$acode=$_GET['code'];


$querry="SELECT username FROM logindetail WHERE acode='$acode'";

$sqlrun=mysqli_query($conn,$querry);

if ($sqlrun->num_rows > 0) {
    while($row = $sqlrun->fetch_assoc()) {
        $username= $row['username'];
     }

     $querry2="UPDATE `logindetail` SET `activation` = 'Yes' WHERE `logindetail`.`username` = '$username'";
     mysqli_query($conn,$querry2);
     header("Location:ulogin.php?activation=success");
     mysqli_close($conn);
     
}

else{
  echo "Invalid Activation Link";
  mysqli_close($conn);
}

}

else{
    echo "Invalid Actication link";
}