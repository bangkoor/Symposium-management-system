<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" type="text/css" href="form.css" >
<title>Colleges Participated</title>
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


<?php
include("db.php");
$college=$_POST['College'];
$date=$_POST['Date'];
$result = mysql_query("SELECT * FROM participant where date='$date' AND college='$college'");
$dbrow=mysql_num_rows($result);
if(!$dbrow)
{
echo "No record found";
}
else
{
echo"<div align=\"left\">
<font color=\"green\" ><h2>Search Result</h2></font>
</div>";
echo "<div id=\"collegename\"><span class=\"headl\">College Name:</span>$college&nbsp;</div>";
echo "</br>";
echo "<table border='1'>
<tr>
<tr>
<th>S.NO</th>
<th>Students Id</th>
<th>Name</th>
<th>College</th>
<th>Department</th>
<th>Email</th>
<th>Phone Number</th>
<th>Amount paid</th>
<th>Date</th>

</tr>";
$sno=1;
$total=0;
while($row = mysql_fetch_array($result))
  {
	
	
	echo "<tr>";
   echo "<td>" . $sno . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name']."</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  $total++;
  $sno++;
  }
echo "</table>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total;
echo"</div>";
echo"</div>";
}
mysql_close($con);
?>
</body>
</html>