<?php
ob_start();
?>
<?php
?>


<html>
    <head>
        <title> ADMIN Login Page</title>
 
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine/styleSlider.css"/>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript" src="engine/jquery.js"></script>

<link href="css/style-popup.css" type="text/css" rel="stylesheet" />

 
     
    <style type="text/css">
        .style1
        {
            font-size: medium;
        }
		
         .style2
        {
            float: center;
            line-height: 50px;
            text-align: center;
            color: #FFFFFF;
            font-weight: 700;
			background : transparent;
        }
		.style3
		{
			background : transparent;
		}
		img div{
		height:160px;
		width:1250px;
		 }
   

.image {
  text-align: center;
  margin: 8px 0px ;
  position: relative;
}
img.logo {
  width: 20%;
  height:20%;
  border-radius: 50%;
}



input[type=text],input[type=email],input[type=date], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 6px 200px;
  margin-right:200px;
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
.login{
    position:absolute;
      
    top:100px;
    left:110px;
}


        </style>
    </head>
<div class="test">


    <body>
    <div id="wrapper">
<div class="wrapper_content">
<div id="top-head">
<div img src="images/background1.jpg">
</div>
</div>

<div id='cssmenu'>
<ul>
<li><a href="index.html" class="active"><img src="images/home.png" alt="Mountain View" style="width:25px;height:25px;"></a>

	  </li>


<li><a href="#">LOGIN</a>
<ul>
         <li class='has-sub'><a href='ulogin.php'><span>User Login</span></a>
         </li>
         <li class='has-sub'><a href='alogin.php'><span>Admin Login</span></a>
         </li>
	
      </ul>
</li>
<li><a href="register.php">Register</a></li>
<li><a href="contact_us.html">Contact us</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="patent.html">Patents&Copyrights</a></li>


</ul>
</div>
<!-- Subtitle -->
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<marquee scrollamount="6" onmouseover="stop()" onmouseout="start()" style="color : orange; font-size : 20px; font-family : verdana;">
example sentences are to be displayed here incase nedded.sdgzzzz............<font color = "black">
</font><font color="blue">Innovate.........Implement..........Invent</font><font color="black"> in</font>
<font color="green">All India Council for Technical Education(AICTE) </font>
</marquee>
<div id="header">
<div id="wowslider-container1">
    <div class="ws_images"> 
    
    <a href="#"><img src="images/2.png" /> </a>
    <a href="#"><img src="images/1.png" /> </a>
	<a href="#"><img src="images/4.png" /> </a>
   </div>
  </div>
  <script type="text/javascript" src="engine/script.js"></script></div></div>

<div id="left">
<div class="left-box">
<div class="left-heading">Side bar<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>

<li><a href="https://www.nic.in/"><p style="font-size:20px">Nic portal</p><br></span></a>
        </li>
        <li><a href="https://www.sih.gov.in/"><p style="font-size:20px">SIH Site</p><br></span></a>
        <li><a href="https://mhrd.gov.in/"><p style="font-size:20px">MHRD portal</p></span></a>
        </ul></div>
        </div>

<div class="left-box">
<div class="left-heading">pending<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><a href=".html"><p style="font-size:20px">Test Link1</p><br></span></a>
</li>
</ul>
</div>
</div>


<div class="left-box">
<div class="left-heading">CO<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><a href="underDevelop.html"><p style="font-size:20px">Test Link1</p><br></span></a>
<li><a href="hodsir.html"><p style="font-size:20px">Test Link1</p><br></span></a>
</li>
</ul>
</div>
</div>
<div class="left-box">
<div class="left-heading">SUPPORTED BY<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<img src="aicte.jpg" height="150px" width="237px" style="margin-left:10px; margin-top:10px; border:1px solid #000" />
<p style="text-align:center"><a href="http://www.aicte-india.org/" target="_blank"><b>
   AICTE,  Delhi</b></a><br />

NewDelhi, Delhi, India<br/>
Website: http://www.aicte.org/
   
</p>
<div id="read-more"><a href="aicte-india.org">Read more</a></div></div>
</div>
<div class="left-box">
<div class="left-heading">Hit Counter<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><center><!-- Start of WebFreeCounter Code -->
    <a href="index.html" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=zmmoxxk&nd=6&style=5" border="0" alt="web counter"></a>
    <!-- End of WebFreeCounter Code -->
</center>
</li>
</ul>
</div>
</div>

</div>

        <form action="alogin.php" method="post">
  
        <div style="position:relative;
        top:200px;" align="center">
         <h1>ADMIN LOGIN</h1>
        <input type="text" placeholder="Admin ID" name="mailuid">            <br />
            
            <input type="password" placeholder="Password" name="pwd">
            <br> <br>
           <label for="remember me">Remember me</label>
            <input type="checkbox" name="remember me"></input><br>
            <button  type="submit" href="ahome.php" name="login-submit">LOGIN</button></div>     
        </form>
   
           
    </body>
</div>
</html>



   <?php
require "includes/udbh.inc.php";
session_start();

if(isset($_POST['login-submit']))
{
    $username=$_POST['mailuid'];
    $password=$_POST['pwd'];
    echo "test";
     //fetching hashedpwd
     $getPWD="SELECT * FROM adminlogin WHERE adminid='$username' AND password='$password'";
     
$sqlrun=mysqli_query($conn,$getPWD);
if ($sqlrun->num_rows > 0) {
    $_SESSION['admin']=$username;
    header("Location:ahome.php");
} else {
    echo '<script language="javascript">';
    echo 'alert("Username/password does not match")';
    echo '</script>';
    exit();
}

}

?>