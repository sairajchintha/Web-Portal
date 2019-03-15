<?php
require "ahome.php";
require "includes/udbh.inc.php";
?>

<?php
if($_GET['x']=='a'){

$sql = "SELECT * FROM ideas where status='accepted' order by category ASC";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
 
    echo "<div class='scroll' style = 'position:absolute; left:600px; width:0%; top:550px; background-color:white;'>
<font color='black'><table border='5' bordercolor='black'>
<tr>
    <th>UserName</th>
    <th>application_no</th>
    <th>title</th>
    <th>status</th>
    <th>category</th>
    <th>field</th>
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
$conn->close();
}



else if($_GET['x']=='r'){
 
    $sql = "SELECT * FROM ideas where status='rejected' order by category ASC";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) {
        // output data of each row
     
        echo "<div class='scroll' style = 'position:absolute; left:600px; width:0%; top:550px; background-color:white;'>
    <font color='black'><table border='5' bordercolor='black'>
    <tr>
        <th>UserName</th>
        <th>application_no</th>
        <th>title</th>
        <th>status</th>
        <th>category</th>
        <th>field</th>
        <th>Image</th>
        <th>Submission</th>
        <th>remarks</th>
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
            "<td>" . $row["submission"]. "</td>".
            "<td>".$row["remarks"]."</td>".
            "<td></div><a href="."viewidea.php?x=$application>Click</a></div></td>
           </tr>";
      
        }
        echo "</table></font></div><br>";
    } else {
        echo "0 results";
    }
    $conn->close();
    }




  else  if($_GET['x']=='p'){
    
        $sql = "SELECT * FROM ideas where status='pending' order by category ASC";
        $result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
 
    echo "<div class='scroll' style = 'position:absolute; left:600px; width:0%; top:550px; background-color:white;'>
<font color='black'><table border='5' bordercolor='black'>
<tr>
    <th>UserName</th>
    <th>application_no</th>
    <th>title</th>
    <th>status</th>
    <th>category</th>
    <th>field</th>
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
$conn->close();
}

else if($_GET['x']=='all'){
 
    $sql = "SELECT * FROM ideas order by category ASC";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) {
        // output data of each row
     
        echo "<div class='scroll' style = 'position:absolute; left:600px; width:0%; top:550px; background-color:white;'>
    <font color='black'><table border='5' bordercolor='black'>
    <tr>
        <th>UserName</th>
        <th>application_no</th>
        <th>title</th>
        <th>status</th>
        <th>category</th>
        <th>field</th>
        <th>Image</th>
        <th>Submission</th>
        <th>remarks</th>
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
            "<td>" . $row["submission"]. "</td>".
            "<td>".$row["remarks"]."</td>".
            "<td></div><a href="."viewidea.php?x=$application>Click</a></div></td>
           </tr>";
      
        }
        echo "</table></font></div><br>";
    } else {
        echo "0 results";
    }
    $conn->close();
    }




else{
    header("location:ahome.php");
}
?>
