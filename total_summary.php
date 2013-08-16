
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link  rel="stylesheet" type="text/css" href="form.css" >
<link  rel="stylesheet" type="text/css" href="table_css.css" >
</head>

<body>
<?php include 'menu.html';?>
<?php include 'db.php';?>
<?php
echo"<div align=\"left\">
<font color=\"green\" ><h2>Search Result</h2></font>
</div>";
echo "<div id=\"collegename\"><span class=\"headl\"><h2>SUMMARY OF THREE DAYS</h2></span></div>";
echo "</br>";

$done = mysql_query("SELECT * FROM participant where date='21-8-2013'");
$dtwo = mysql_query("SELECT * FROM participant where date='22-8-2013'");
$dthree = mysql_query("SELECT * FROM participant where date='23-8-2013'");
$result = mysql_query("SELECT * FROM participant");
echo "<h3>DAY ONE</h3>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>Student Id</td>
<td>Name</td>
<td>College</td>
<td>Department</td>
<td>Email</td>
<td>Phone Number</td>
<td>Amount paid</td>
<td>Date</td>

</tr>";

$sno1=1;
$total1=0;
while($row = mysql_fetch_array($done))
  {
	  
  
	
  echo "<tr>";
  echo "<td>" . $sno1 . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] ."</td>";
  echo "<td>" . $row['college'] . "</td>";
 echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  $total1++;
  $sno1++;
  }
echo "</table>";
echo"</div>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total1;
echo"</div>";

echo "<h3>DAY TWO</h3>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>Student Id</td>
<td>Name</td>
<td>College</td>
<td>Department</td>
<td>Email</td>
<td>Phone Number</td>
<td>Amount paid</td>
<td>Date</td>

</tr>";

$sno2=1;
$total2=0;
while($row = mysql_fetch_array($dtwo))
  {
	  
  
	
  echo "<tr>";
   echo "<td>" . $sno2 . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  $total2++;
  $sno2++;
  }
echo "</table>";
echo"</div>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total2;
echo"</div>";
echo "<h3>DAY THREE</h3>";
echo "<div class=\"CSSTableGenerator\" >";

echo "<table>
<tr>
<td>S.NO</td>
<td>Student Id</td>
<td>Name</td>
<td>College</td>
<td>Department</td>
<td>Email</td>
<td>Phone Number</td>
<td>Amount paid</td>
<td>Date</td>

</tr>";

$sno3=1;
$total3=0;
while($row = mysql_fetch_array($dthree))
  {
	  
  
	
  echo "<tr>";
   echo "<td>" . $sno3 . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name']."</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  $total3++;
  $sno3++;
  }
echo "</table>";
echo"</div>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total3;
echo"</div>";

echo "<h3>TOTAL SUMMARY</h3>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>Student Id</td>
<td>Name</td>
<td>College</td>
<td>Department</td>
<td>Email</td>
<td>Phone Number</td>
<td>Amount paid</td>
<td>Date</td>

</tr>";

$sno4=1;
$total4=0;
while($row = mysql_fetch_array($result))
  {
	  
  
	
  echo "<tr>";
   echo "<td>" . $sno4 . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name']. "</td>";
    echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  $total4++;
  $sno4++;
  }
echo "</table>";
echo"</div>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total4;
echo"</div>";

echo"</div>";
mysql_close($con);
?></body>
</html>