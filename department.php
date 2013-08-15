
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link  rel="stylesheet" type="text/css" href="form.css" >
</head>

<body>
<div align="center">
<div id="main">
<table border="0" width="100%">
<tr><td width="10%"> 
<img src="saveetha.jpg"/></td>
<td width="70%"><center><h1>SAVEETHA ENGINEERING COLLEGE</h1></center>
</td>
<td><img src="dr.jpg"/></td></tr>
</table>

<div align="left">
<ul id="menu" style="background-color:#0066FF">
<li ><a href="index.php">Home</a></li>
<li ><a href="search.php" style="background-color:#3300CC;">Report</a></li>
</ul>
</div>
<div align="left"><a href="search.php"><img src="back.gif" width="80" /></a></div>
<?php include 'db.php';?>
<?php
echo"<div align=\"left\">
<font color=\"green\" ><h2>Search Result</h2></font>
</div>";
echo "<div id=\"collegename\"><span class=\"headl\">Total Summary</span></div>";
echo "</br>";

$done = mysql_query("SELECT * FROM Persons where Date='21-8-2013'");
$dtwo = mysql_query("SELECT * FROM Persons where Date='22-8-2013'");
$dthree = mysql_query("SELECT * FROM Persons where Date='23-8-2013'");
$result = mysql_query("SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>S.NO</th>
<th>Student Id</th>
<th>Name</th>
<th>College</th>
<th>Department</th>
<th>Email</th>
<th>Phone Number</th>
<th>Amount paid</th>
<th>Date</th>

</tr>";

$sno4=1;
$total4=0;
while($row = mysql_fetch_array($result))
  {
	  
  
	
  echo "<tr>";
   echo "<td>" . $sno4 . "</td>";
  echo "<td>" . $row['StudentId'] . "</td>";
  echo "<td>" . $row['Fname'] ."&nbsp;". $row['Sname'] . "</td>";
  if($row['College']=="other")
  {
  echo "<td>" . $row['OtherCollege'] . "</td>";	  
  }
  else{
  echo "<td>" . $row['College'] . "</td>";
  }
   echo "<td>" . $row['Department'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Mobile'] . "</td>";
  echo "<td>" . $row['Amount'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
  echo "</tr>";
  $total4++;
  $sno4++;
  }
echo "</table>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total4;
echo"</div>";

echo"</div>";
mysql_close($con);
?></body>
</html>