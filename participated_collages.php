<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" type="text/css" href="form.css" >
<link  rel="stylesheet" type="text/css" href="table_css.css" >

<title>Participated colleges</title>
</head>

<body>
<?php include 'menu.html';?>
<div align="left"><font color="green"><h2>Participated Colleges</h2></font></div>

<?php include 'db.php';?>
<?php
$day11 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='21-8-2013'");
$day21 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='22-8-2013'");
$day31 = mysql_query("SELECT DISTINCT college FROM participant WHERE Date='23-8-2013'");
$result = mysql_query("SELECT DISTINCT college FROM participant");
echo '<h3>DAY WISE SUMMARY<h3>';

echo"<br><b>DAY ONE</b></br>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>PARTICIPATED COLLEGES</td>

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
echo "</div>";
echo "<div align=\"left\">";
echo "<b>Total</b>&nbsp;".$total1;
echo "</div>";
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';

echo"<br><b>DAY TWO</b></br>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>PARTICIPATED COLLEGES</td>


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
echo "</div>";
echo "<div align=\"left\">";
echo "<b>Total</b>&nbsp;".$total2;
echo "</div>";
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo"<br><b>DAY THREE</b></br>";
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>PARTICIPATED COLLEGES</td>
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
echo "</div>";
echo "<div align=\"left\">";
echo "<b>Total</b>&nbsp;".$total3;
echo "</div>";
echo '</td>';
echo '</tr>';
echo '</table>';


echo '<h3> OVERALL SUMMARY<h3>';
echo "<div class=\"CSSTableGenerator\" >";
echo "<table>
<tr>
<td>S.NO</td>
<td>PARTICIPATED COLLEGES</td>

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
echo"<div align=\"left\">";
echo"<b>Total</b>"." ".$total;
echo"</div>";

mysql_close($con);

?>

</body>
</html>