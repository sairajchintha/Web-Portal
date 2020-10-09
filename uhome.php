<?php
require "ulogged.php";
require "uheader.php";
require "footer.html";
require "includes/udbh.inc.php";
?>

<?php

if($_GET['signup']=='success'){
    echo '<script language="javascript">';
    echo 'alert("Successfully Registered")';
    echo '</script>';
    exit();
}
