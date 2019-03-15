

<?php
ob_start();
?>

<?php
require "ulogged.php";
require "footer.html";
require "includes/udbh.inc.php";
require "uheader.php";
?>

<html>
<head>
    <title>Register Page</title>
<style type="text/css">
input[type=text],select,input[type=email],input[type=tel],textarea,input[type=date], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;}


button {
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  background-color:green;
}

</style>    
</head>
<body>


<main>
    
<div align="center" > 
<form id="saiko" action="IdeaSubmit.php" method="post" enctype = "multipart/form-data">
    <label for=""><b>title of idea:</b></label>
    <input type="text" name="title" id="fid" placeholder="write a suitable title"><br>
    
    <label for="mail"><b>Email id:</b></label>
    <input type="email" name="mail"   placeholder="someone@something.com"><br>
    <label for="category"><b>category:</b></label>
    <select class="select" name="category">
    <option value="software">Software</option>
    <option value="hardware">Hardware</option>
    <option value="other">Other</option>
    </select><br>
    <label for="field"><b>Field:</b></label>
    <select class="select" name="field">
    <option value="agriculture">Agriculture</option>
    <option value="sensors">Sensors</option>
    <option value="space">Space</option>
    <option value="robotics">Robotics</option>
    <option value="other">Other</option>
    </select><br>
    <label for="mobnum"><b>Mobile number:</b></label>
    <input type="tel" name="mobnum" maxlength="10" placeholder="mobilenumber"></input><br>
    <label for="desc"><b>Description:</b></label>
    <textarea name="desc" rows="10" column="20"  size="10px" placeholder="descibe your idea<br>in 500 words"></textarea><br>
    <label for="file">Reference docs</label>
       <input type="file" name="image">
    <br><button type="submit" name="idea-submit">Submit Idea</button>
   
</form></div>
</main>


</body>
</html>



<?php



 

if(isset($_POST['idea-submit'])){
$title=$_POST['title'];
$email=$_POST['mail'];
$category=$_POST['category'];
$field=$_POST['field'];
$mobile=$_POST['mobnum'];
$description=$_POST['desc'];


$getDetails="SELECT FirstName,LastName,ADDRESS FROM `personaldetail` WHERE username='$user'";
$sqlrun=mysqli_query($conn,$getDetails);
if ($sqlrun->num_rows > 0) {
    // output data of each row
    while($row = $sqlrun->fetch_assoc()) {
        $Firstname=$row["FirstName"];
        $Lastname=$row["LastName"];
        $address=$row["ADDRESS"];
    }
    echo $user ;
echo $Firstname ;
echo $Lastname.$address ;
} else {
    
    exit();
}



//empty validation
if(empty($title) || empty($email) || 
empty($category) || empty($field) || empty($mobile) || empty($description) || empty($address)){
    echo '<script language="javascript">';
    echo 'alert("Please Fill all the fields")';  //not showing an alert box.
    echo '</script>';
    exit();
}

//mobile validations
else if(!preg_match("/^[0-9]*$/", $mobile)){
    echo '<script language="javascript">';
echo 'alert("enter valid mobile.No")';  
echo '</script>';
    exit();
}

else if(strlen($mobile)!=10){
    echo '<script language="javascript">';
echo 'alert("enter valid mobile.No")'; 
echo '</script>';
    exit();
}


//TAKING IMAGE

else{

    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152) {
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"images/$user-$title".$file_name);
        }else{
           print_r($errors);
           echo '<script language="javascript">';
     echo 'alert("Please insert the image")'; 
     echo '</script>';
         exit();
        
        
     }
     }


$location="images/$user-$title$file_name";
$submitDetails="insert into `ideas`(username ,name,title,email,category,field,MobileNo,description,Address,Filelocation)
values ('$user','$Firstname $Lastname','$title','$email','$category','$field',$mobile,'$description','$address','$location')";
mysqli_query($conn,$submitDetails);
mysqli_close($conn);
echo '<script language="javascript">';
    echo 'alert("Sucessfully Submitted")';  
    echo '</script>';
}

exit();
}
?>


