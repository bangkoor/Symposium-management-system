<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" type="text/css" href="form.css" >
<title>Participated colleges</title>
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
<div align="left"><a href="file:///C|/wamp/www/admin/search.php"><img src="file:///C|/wamp/www/admin/back.gif" width="80" /></a></div>
<div align="left"><font color="green"><h2>Participated Colleges</h2></font></div>

<?php include 'db.php';?>
<?php
$day11 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='21-8-2013'");
$day21 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='22-8-2013'");
$day31 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='23-8-2013'");
$result = mysql_query("SELECT DISTINCT college FROM participant");
echo '<h3>Day Wise Summary<h3>';
echo "<table border='1'>";
echo '<tr>';
echo '<td>';

echo"<br><b>Day  One</b></br>";
echo "<table border='1' align=='left'>
<tr>
<th>S.NO</th>
<th>Participated College</th>

</tr>";
$sno1=1;
$total1=0;
while($row = mysql_fetch_array($day11))
  {
  echo "<tr>";
  echo "<td>" . $sno1 . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "</tr>";
  $total1++;
  $sno1++;
}
echo "</table>";
echo "<b>Total</b>&nbsp;".$total1;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';

echo"<br><b>Day  Two</b></br>";
echo "<table border='1'>
<tr>
<th>S.NO</th>
<th>Participated College</th>

</tr>";
$sno2=1;
$total2=0;
while($row = mysql_fetch_array($day21))
  {
  echo "<tr>";
  echo "<td>" . $sno2 . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "</tr>";
  $total2++;
  $sno2++;
	  }
echo "</table>";
echo "<b>Total</b>&nbsp;".$total2;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo"<br><b>Day  Three</b></br>";
echo "<table border='1'>
<tr>
<th>S.NO</th>
<th>Participated College</th>
</tr>";
$sno3=1;
$total3=0;
while($row = mysql_fetch_array($day31))
  {
  echo "<tr>";
  echo "<td>" . $sno3 . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "</tr>";
  $total3++;
  $sno3++;
	  }
echo "</table>";
echo "<b>Total</b>&nbsp;".$total3;
echo '</td>';
echo '</tr>';
echo '</table>';


echo '<h3> Overall Summary<h3>';
echo "<table border='1'>
<tr>
<th>S.NO</th>
<th>Participated College</th>

</tr>";
$sno=1;
$total=0;
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $sno . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "</tr>";
  $total++;
  $sno++;
	  }
echo "</table>";
echo "<b>Total</b>&nbsp;".$total;
echo"</div>";
echo"</div>";
mysql_close($con);

?>

</body>
</html>