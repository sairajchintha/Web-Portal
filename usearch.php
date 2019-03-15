<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

  <div class="search-container">
    <form action="usearch.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      <label for="year"><b>Search By</b></label>
    <select class="select" name="searchby">
    <!--<option value="username">username</option>-->
    <option value="field">field</option>
    <option value="category">category</option>
    </select><br>
    </form>
  </div>

</body>
</html>

<?php




require "ulogged.php";
include 'includes/udbh.inc.php';
require "uheader.php";


$search=$_POST['search'];
$searchby=$_POST['searchby'];




/*
if($searchby=="username"){
$sql="select * from ideas where username LIKE '$search%' AND username='$user'";
$result = $conn->query($sql);
        
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        if ($result->num_rows > 0) {
            // output data of each row
         
            echo "<div class='scroll' style = 'position:absolute; left:250px; top:80px; background-color:white;'>
        <font color='black'><table border='5' bordercolor='black'>
        <tr>
            <th>UserName</th>
            <th>application_no</th>
            <th>title</th>
            <th>status</th>
            <th>Image</th>
            <th>Submission</th>
            <th>View</th>
        </tr>";
            while($row = $result->fetch_assoc()) {
                $application=$row["application_no"];
                echo "<tr>
                <td>" . $row["username"]. "</td>
                <td>" . $row["application_no"]. "</td>
                <td>" . $row["title"]. "</div></div></td>
                <td>" . $row["status"]. "</td>".
                "<td>". $row["category"]. "</td>".
                "<td>". $row["field"]. "</td>".
                "<td>"."<img src=".$row['Filelocation']." width='60px' height='60px'/> </td>".
                "<td>" . $row["submission"]. "</td>
                <td></div><a href="."viewidea.php?x=$application>Click</a></div></td>
               </tr>";
          
            }
            echo "</table></font></div><br>";
        } else {
            echo "0 results";
        }
    }
*/
    if($searchby=="field"){
        $sql="select * from ideas where field LIKE '$search%' AND username='$user'";
        $result = $conn->query($sql);
                
                if (!$result) {
                    trigger_error('Invalid query: ' . $conn->error);
                }
                if ($result->num_rows > 0) {
                    // output data of each row
                 
                    echo "<div class='scroll' style = 'position:absolute; left:250px; top:80px; background-color:white;'>
                <font color='black'><table border='5' bordercolor='black'>
                <tr>
                    <th>UserName</th>
                    <th>application_no</th>
                    <th>title</th>
                    <th>status</th>
                    <th>Image</th>
                    <th>Submission</th>
                    <th>View</th>
                </tr>";
                    while($row = $result->fetch_assoc()) {
                        $application=$row["application_no"];
                        echo "<tr>
                        <td>" . $row["username"]. "</td>
                        <td>" . $row["application_no"]. "</td>
                        <td>" . $row["title"]. "</div></div></td>
                        <td>" . $row["status"]. "</td>".
                        "<td>". $row["category"]. "</td>".
                        "<td>". $row["field"]. "</td>".
                        "<td>"."<img src=".$row['Filelocation']." width='60px' height='60px'/> </td>".
                        "<td>" . $row["submission"]. "</td>
                        <td></div><a href="."viewidea.php?x=$application>Click</a></div></td>
                       </tr>";
                  
                    }
                    echo "</table></font></div><br>";
                } else {
                  //  echo "0 results";
                }
            }


                
                    elseif($searchby=="category"){
                        $sql="select * from ideas where category LIKE '$search%' AND username='$user'";
                        $result = $conn->query($sql);
                                
                                if (!$result) {
                                    trigger_error('Invalid query: ' . $conn->error);
                                }
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                 
                                    echo "<div class='scroll' style = 'position:absolute; left:250px; top:80px; background-color:white;'>
                                <font color='black'><table border='5' bordercolor='black'>
                                <tr>
                                    <th>UserName</th>
                                    <th>application_no</th>
                                    <th>title</th>
                                    <th>status</th>
                                    <th>Image</th>
                                    <th>Submission</th>
                                    <th>View</th>
                                </tr>";
                                    while($row = $result->fetch_assoc()) {
                                        $application=$row["application_no"];
                                        echo "<tr>
                                        <td>" . $row["username"]. "</td>
                                        <td>" . $row["application_no"]. "</td>
                                        <td>" . $row["title"]. "</div></div></td>
                                        <td>" . $row["status"]. "</td>".
                                        "<td>". $row["category"]. "</td>".
                                        "<td>". $row["field"]. "</td>".
                                        "<td>"."<img src=".$row['Filelocation']." width='60px' height='60px'/> </td>".
                                        "<td>" . $row["submission"]. "</td>
                                        <td></div><a href="."viewidea.php?x=$application>Click</a></div></td>
                                       </tr>";
                                  
                                    }
                                    echo "</table></font></div><br>";
                                } else {
                                    echo "0 results";
                                }
                            }
                
                

                            

                                
                                


?>