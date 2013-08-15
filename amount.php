<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amount</title>
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

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("DRESTEIN", $con);
echo "<div id=\"collegename\"><span class=\"headl\">Money Report</span>$dep&nbsp;</div>";
echo "</br>";

$done = mysql_query("SELECT * FROM Persons where Date='5-9-2012'");
$dtwo = mysql_query("SELECT * FROM Persons where Date='6-9-2012'");
$dthree = mysql_query("SELECT * FROM Persons where Date='7-9-2012'");


$user1 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.1' AND Date='5-9-2012'");
$user2 = mysql_query("SELECT * FROM Persons where IPAddress='127.0.0.1'");
$user3 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.3'");
$user4 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.4'");
$user5 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.5'");
$user6 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.6'");
$user7 = mysql_query("SELECT * FROM Persons where IPAddress='192.168.0.7'");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Amount Recived</th>
<th>Rs</th>
</tr>";
echo "<tr>";
echo "<td>Day one</td>";
echo "<td>";
while($row = mysql_fetch_array($done))
  {
  if($row['College']=="Saveetha Engineering College")
  {
  }
  else
  {
	  $total++;
  }
  }
  echo "Day one registerd".$total."</br>";
  $amount1=$total*50;
  echo $amount1;
  echo "</td>";
  echo "</tr>";
echo "<tr>"; 
echo "<td>Day Two</td>";
echo "<td>";
while($row = mysql_fetch_array($dtwo))
  {
  if($row['College']=="Saveetha Engineering College")
  {
  }
  else
  {
	  $total++;
  }
  }
  $amount2=$total*50;
  echo $amount2;
  echo "</td>";
  echo "</tr>";
  
echo "<tr>";
echo "<td>Day Three</td>";
echo "<td>";
while($row = mysql_fetch_array($dthree))
  {
  if($row['College']=="Saveetha Engineering College")
  {
  }
  else
  {
	  $total++;
  }
  }
  
  $amount3=$total*50;
  echo $amount3;
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
echo "<td><b>Total</b></td>";
  $total1=$amount1+$amount2+$amount3;
echo "<td><b>".$total1."</b></td>";
  echo "</tr>";
 
  echo "</table>";




?>
</body>
</html>