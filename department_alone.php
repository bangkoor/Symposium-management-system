<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Departments Participated</title>
<link  rel="stylesheet" type="text/css" href="form.css" >
<link  rel="stylesheet" type="text/css" href="table_css.css" >
</head>

<body>
<?php include 'menu.html';?>
<?php
include("db.php");
$department=$_POST['Department'];
$date=$_POST['Date'];
$result = mysql_query("SELECT * FROM participant where date='$date' AND department='$department'");
$dbrow=mysql_num_rows($result);
if(!$dbrow)
{
echo "No record found";
}
else
{
$date=$_POST['Date'];
$dep=$_POST['Department'];
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("DRESTEIN", $con);
echo"<div align=\"left\">
<font color=\"green\" ><h2>Search Result</h2></font>
</div>";
echo "<div id=\"collegename\"><span class=\"headl\">DEPARTMENT:&nbsp;&nbsp;</span>$dep&nbsp;</div>";
echo "</br>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>Persion Id</td>
<td>Name</td>
<td>College</td>
<td>Department</td>
<td>Email</td>
<td>Phone Number</td>
<td>Amount paid</td>
<td>Date</td>

</tr>";

$sno=1;
$total=0;
while($row = mysql_fetch_array($result))
  {
	  
  
	
 echo "<tr>";
   echo "<td>" . $sno . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
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
echo "</div>";
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total;
echo"</div>";
echo"</div>";
}
mysql_close($con);
?>
</body>
</html>