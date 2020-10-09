<?php $x=$_GET['x'];
 ?>

<?php 
require "includes/udbh.inc.php";

$sql = "SELECT * FROM ideas WHERE application_no=$x";
        $result = $conn->query($sql);
        
        if (!$result) {
            echo trigger_error('Invalid query: ' . $conn->error);
        }
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $status=$row['status'];
          }
          
        }
      

  ?>

<?php

require "includes/udbh.inc.php";
session_start();
      
    //reject the idea
    if(isset($_GET['reject'])){
      $q="UPDATE ideas SET status='rejected' WHERE application_no=".$_GET['reject'];
      mysqli_query($conn,$q);
      $z=$_GET['remarks'];
      $q1="UPDATE ideas SET remarks='$z' WHERE application_no=".$_GET['reject'];
      mysqli_query($conn,$q1);
      
      header("Location:Ideastatus.admin.php?x=r");  
    }
    
    //accept the idea
    if(isset($_GET['accept'])){
      $q="UPDATE ideas SET status='accepted' WHERE application_no=".$_GET['accept'];
      mysqli_query($conn,$q);
      $z=$_GET['remarks'];
      $q1="UPDATE ideas SET remarks='$z' WHERE application_no=".$_GET['accept'];
      mysqli_query($conn,$q1);
      

      header("Location:IdeaStatus.admin.php?x=a");
    }
  




//IF LOGGED IN AS ADMIN
if(isset($_SESSION['admin']))
{
  $sql = "SELECT * FROM ideas WHERE application_no=$x";
        $result = $conn->query($sql);
        
        if (!$result) {
            echo trigger_error('Invalid query: ' . $conn->error);
        }
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $status=$row['status'];
          }
          
        }
      
  if($status=="Pending"){
echo 
"<div style = 'position:absolute; left:250px; top:950px; background-color:white; right:50;'>
     <form action='viewidea.php' method='get'><div style='position:absolute;left:250px; top:0px; right:50px;'>Remarks:<input type='text' name='remarks' placeholder='remarks'></input></div>
     <div style='position:absolute; left:180px; top:60px; right:50px;' align='center'><button id='accept' type='submit' align='center' value=$x name='accept'>Accept</button>
      <button id='reject'type='submit' value=$x name='reject'>Reject</button></div>
    </form></div> ";
  }
  
  
    {
    
        require "aheader.php";
        //retrieving content
        $sql = "SELECT * FROM ideas WHERE application_no=$x";
        $result = $conn->query($sql);
        
        if (!$result) {
            echo trigger_error('Invalid query: ' . $conn->error);
        }
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
           $application=$row['application_no'];
           $username=$row['username'];
           $title=$row['title'];
           $category=$row['category'];
           $field=$row['field'];
           $description=$row['description'];
           $status=$row['status'];
           $submission=$row['submission'];
           $name=$row['name'];
           $mobile=$row['mobileno'];
           $address=$row['address'];
        }
        
      }
      
      //displaying the content
        echo "<html>
        <head>
        </head>
     
        <body>
           <div style = 'position:absolute; left:250px; top:60px; background-color:white; right:50;'>
              
              <html>
              <head>
              <style>
              
              
              
              
              
              .image {
                text-align: center;
                margin: 0px 0 12px 0;
                position: relative;
              }
              
              img.logo {
                width: 20%;
                height:10%;
                border-radius: 50%;
              }
              
              
              ul {
                font-family: Arial;
                list-style-type: none;
                margin: 0%;
                padding: 0%;
                overflow: hidden;
                background-color: #333333;
              }
              
              li {
                float: left;
              }
              
              li a {
                display: block;
                color: white;
                text-align: center;
                padding: 16px;
                text-decoration: none;
              }
              
              li a:hover {
                opacity:0.8;
              }
              ul li.active{
                    background-color: aliceblue ;
              }
              body {font-family: Arial, Helvetica, sans-serif;}
              #saiko {
                margin-top: 0%;
                margin-right: 30%;
                margin-bottom: 15%;
                margin-left: 30%;
                border: 3px solid black;}
              
              
              input[type=text],input[type=email],input[type=date], input[type=password] {
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid black;
                box-sizing: border-box;
              }
              
              
                button{
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 20%;
              }
              #accept {background-color:green;}
              #reject {background-color:red;}
              button:hover {
                opacity: 0.8;
              }
              
              #add{
                width: 60%;
                height: 100px;
                padding: 0px;
                border: 1px solid #ccc;
                border-radius: 0px;
                
              }
              input[type=text],input[type=password],input[type='tel'] {
                width: 60%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
              }
              </style>
              </head>
              <form style='  margin-top:0px;
                margin-right: 20%;
                margin-bottom: 0;
                margin-left: 20%;
                border: 3px solid black;'  action='' method='post'>
                  <legend><label for='appno'><b>Application no:</b></label>
                  <input type='text' name='appno' readonly value=$application id='fid' ><br>
                  <label for='idea'><b>Idea submitted by:</b></label>
                  <input type='text' name='idea' readonly value=$username id='lid' ><br>
                  <label for='title'><b>Title:</b></label>
                  <input type='text' name='title' readonly value=$title><br>
                  <label for='cat'><b>Category:</b></label>
                  <input type='text' name='cat' readonly value=$category><br>
                  <label for='field'><b>Field:</b></label>
                  <input type='text' class='field' name='field' readonly value=$field><br>
                  <b>Description:</b>
                  <textarea name='desc' rows='8' cols='57' readonly>$description</textarea><br>
                  <label for='status'><b>Status:</b></label>
                  <input type='text' name='status' readonly value=$status><br>
                  <label for='subdate'><b>Submitted on:</b></label>
                  <input type='date' name='subdate' readonly value=$submission><br>
                 </legend></form><form style='margin-right: 20%;
                margin-bottom: 5%;
                margin-left: 20%;
                border: 3px solid black;'>
                 <h3>About User:</h3>
                  <label for='usernam' ><b>Name:</b></label>
                  <input type='text' name='usernam' readonly value=$name></input><br>
                  <label for='number'><b>Mobile:</b></label>
                  <input type='tel' name='number'  readonly value=$mobile></input><br>
                  <label for='add'><b>Address:</b></label>
                  <textarea name='add' rows='5' cols='63.9' readonly>$address</textarea><br>
                      
              </form>    
               
              </div>
           </div>
        </body>
     </html>";
  
     /*
     echo $status;
    //buttons for accepting and rejecting
     if($status="pending"){
     echo "<div style = 'position:absolute; left:250px; top:950px; background-color:white; right:50;'>
     <form action='viewidea.php' method='post'>
     <div align='center'><button id='accept' type='submit' align='center' name='accept'>Accept</button>
      <button id='reject'type='submit' name='reject'>Reject</button></div>
  </form></div>";
     }
*/
     
   
}
}

//NOT LOGGED IN

elseif(isset($_SESSION['user'])){
  {
      
      {
      
          
          //retrieving content
          $sql = "SELECT * FROM ideas WHERE application_no=$x";
          $result = $conn->query($sql);
          
          if (!$result) {
              echo trigger_error('Invalid query: ' . $conn->error);
          }
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
             $application=$row['application_no'];
             $username=$row['username'];
             $title=$row['title'];
             $category=$row['category'];
             $field=$row['field'];
             $description=$row['description'];
             $status=$row['status'];
             $submission=$row['submission'];
             $name=$row['name'];
             $mobile=$row['mobileno'];
             $address=$row['address'];
          }
          
        }
        
        //displaying the content
          echo "
                <html>
                <head>
                <style>
                
                
                
                
                
                .image {
                  text-align: center;
                  margin: 0px 0 12px 0;
                  position: relative;
                }
                
                img.logo {
                  width: 20%;
                  height:10%;
                  border-radius: 50%;
                }
                
                
                ul {
                  font-family: Arial;
                  list-style-type: none;
                  margin: 0%;
                  padding: 0%;
                  overflow: hidden;
                  background-color: #333333;
                }
                
                li {
                  float: left;
                }
                
                li a {
                  display: block;
                  color: white;
                  text-align: center;
                  padding: 16px;
                  text-decoration: none;
                }
                
                li a:hover {
                  opacity:0.8;
                }
                ul li.active{
                      background-color: aliceblue ;
                }
                body {font-family: Arial, Helvetica, sans-serif;}
                #saiko {
                  margin-top: 0%;
                  margin-right: 30%;
                  margin-bottom: 15%;
                  margin-left: 30%;
                  border: 3px solid black;}
                
                
                input[type=text],input[type=email],input[type=date], input[type=password] {
                  width: 50%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid black;
                  box-sizing: border-box;
                }
                
                
                  button{
                  color: white;
                  padding: 14px 20px;
                  margin: 8px 0;
                  border: none;
                  cursor: pointer;
                  width: 20%;
                }
                #accept {background-color:green;}
                #reject {background-color:red;}
                button:hover {
                  opacity: 0.8;
                }
                
                #add{
                  width: 60%;
                  height: 100px;
                  padding: 0px;
                  border: 1px solid #ccc;
                  border-radius: 0px;
                  
                }
                input[type=text],input[type=password],input[type='tel'] {
                  width: 60%;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  resize: vertical;
                }
                </style>
                </head>
                <form style='  margin-top:0px;
                  margin-right: 20%;
                  margin-bottom: 0;
                  margin-left: 20%;
                  border: 3px solid black;'  action='' method='post'>
                    <legend><label for='appno'><b>Application no:</b></label>
                    <input type='text' name='appno' readonly value=$application id='fid' ><br>
                    <label for='idea'><b>Idea submitted by:</b></label>
                    <input type='text' name='idea' readonly value=$username id='lid' ><br>
                    <label for='title'><b>Title:</b></label>
                    <input type='text' name='title' readonly value=$title><br>
                    <label for='cat'><b>Category:</b></label>
                    <input type='text' name='cat' readonly value=$category><br>
                    <label for='field'><b>Field:</b></label>
                    <input type='text' class='field' name='field' readonly value=$field><br>
                    <b>Description:</b>
                    <textarea name='desc' rows='8' cols='57' readonly>$description</textarea><br>
                    <label for='status'><b>Status:</b></label>
                    <input type='text' name='status' readonly value=$status><br>
                    <label for='subdate'><b>Submitted on:</b></label>
                    <input type='date' name='subdate' readonly value=$submission><br>
                   </legend></form><form style='margin-right: 20%;
                  margin-bottom: 5%;
                  margin-left: 20%;
                  border: 3px solid black;'>
                   <h3>About User:</h3>
                    <label for='usernam' ><b>Name:</b></label>
                    <input type='text' name='usernam' readonly value=$name></input><br>
                    <label for='number'><b>Mobile:</b></label>
                    <input type='tel' name='number'  readonly value=$mobile></input><br>
                    <label for='add'><b>Address:</b></label>
                    <textarea name='add' rows='5' cols='63.9' readonly>$address</textarea><br>
                    
                </form>    
                
                </div>
             </div>
          </body>
       </html>";
    
       /*
       echo $status;
      //buttons for accepting and rejecting
       if($status="pending"){
       echo "<div style = 'position:absolute; left:250px; top:600px; background-color:white; right:50;'>
       <form action='viewidea.php' method='post'>
       <div align='center'><button id='accept' type='submit' align='center' name='accept'>Accept</button>
        <button id='reject'type='submit' name='reject'>Reject</button></div>
      </form></div>";
       }
  */
       
      
     
     
  }

  }


}

else{
    header("Location:index.php");
}

?>

