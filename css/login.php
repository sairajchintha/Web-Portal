
<?php
header("Content-type: text/css");
?>

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
  /*overflow: hidden;*/
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

button {
  background-color:orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

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
input[type=text],input[type=password],input[type="tel"] {
  width: 60%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


.log {
  padding: 2%;
  border: 6px solid black;
  box-align: center;
  margin:0px 20%;
}







#main-container {
	display: table;
	width: 100%;
	height: 100%;
}

#sidebar {
	display: table-cell;
	width: 15%;
	vertical-align: top;
	background-color: #000000;
}

#sidebar a {
	display: block;
	padding: 10px;
	color: white;
	margin: 15px 0 0 0;
	text-decoration: none;
}

#sidebar a:hover {
	background-color:green;
	color: white !important;
}

#content {
	display: table-cell;
	width: 85%;
	vertical-align: top;
	padding: 10px 0 0 10px;
}

ul {list-style: none;padding: 0px;margin: 0px;}
ul li {display: block;position: relative;float: left;border:1px solid #000}
li ul {display: none;}
ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
         white-space: nowrap;color: #fff;}
li:hover ul {display: block; position: absolute;}
li:hover li {float: none;}

li:hover li a:hover {background: #000;}
#drop-nav li ul li {border-top: 0px;}