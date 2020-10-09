
<?php
session_start();
if(isset($_SESSION['user']))
{
    $user=$_SESSION['user'];
    
    echo "<p style='position:absolute;left:500px;top:450px;font-size:20px;'>Welcome, $user.</p>";
}
else{
    header("Location:index.php");
    exit();
}
?>
