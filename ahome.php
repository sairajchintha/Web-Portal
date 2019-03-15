


<?php
session_start();
if(isset($_SESSION['admin'])){
    require 'aheader.php';
    echo "welcome";
}
else{
    header("Location:alogin.php?pleaselogin");
}
?>
<html>
<head>
<meta name="google-signin-client_id" content="250297989974-cfklke3vhq0k9ch23b6ltqev8c2uol7s.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-scope" content="profile email">
    <title>Register Page</title>

    
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
#saiko{
    position:relative;
    top:11%;
    bottom:1%;
left:50px;
height:100%;
}
.address{
    position:absolute;
    top:650px;
    left:475px;
}
body{
    margin-top:40px;
    
    
}
.image{
    position:absolute;
    top:450px;
    left:90px;
}
    .register{
        position:absolute;
        top:200px;
        left:0px;
    } 
    </style>
</head>
<body>
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


<li><a href="includes/logout.inc.php">LOGOUT</a>

</li>

<li><a href="#">Applications</a>
<ul>
         <li class='has-sub'><a href="IdeaStatus.admin.php?x=all"><span>ALL</span></a>
         </li>
         <li class='has-sub'><a href="IdeaStatus.admin.php?x=a"><span>Accepted</span></a>
         </li>
         <li class='has-sub'><a href="IdeaStatus.admin.php?x=r"><span>Rejected</span></a>
         </li>
	
      </ul>
</li>

<li><a href="search.php">Search</a></li>
<li><a href="IdeaStatus.admin.php?x=p">Pending</a></li>


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
<div class="left-heading">APPLICATIONS<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>

<li><a href="IdeaStatus.admin.php?x=all"><p style="font-size:20px">ALL</p><br></span></a>
</li>
<li><a href="IdeaStatus.admin.php?x=a"><p style="font-size:20px">ACCEPTED</p><br></span></a>
<li><a href="IdeaStatus.admin.php?x=r"><p style="font-size:20px">REJECTED</p></span></a>
</ul></div>
</div>

<div class="left-box">
<div class="left-heading">APPLICATIONS<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><a href="IdeaStatus.admin.php?x=p"><p style="font-size:20px">PENDING</p><br></span></a>
</li>
<li><a href="search.php"><p style="font-size:20px">SEARCH</p><br></span></a>
</li>
</ul>
</div>
</div>


<div class="left-box">
<div class="left-heading">FINALE<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><a href="reports.php"><p style="font-size:20px">REPORTS</p><br></span></a>
<li><a href="includes/logout.inc.php"><p style="font-size:20px">LOGOUT</p><br></span></a>
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
<div class="left-heading">INDEXED BY<img src="images/border.png" style="margin-top:5px" /></div>
<div class="list">
<ul>
<li><center><img src="download.png" class="pub-logo" /><br />
</center>
</li>
</ul>
</div>
</div>

</div>
