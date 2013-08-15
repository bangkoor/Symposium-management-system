
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("DRESTEIN", $con);

$result = mysql_query("SELECT * FROM Persons where date='23-8-2012'");

echo "<table border='1'>
<tr>
<th>Persion Id</th>
<th>Name</th>
<th>Department</th>
<th>Collage</th>
<th>Email</th>
<th>Phone Number</th>
<th>Amount paid</th>
<th>Date</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
   
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['dep'] . "</td>";
  echo "<td>" . $row['collage'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['pno'] . "</td>";
  echo "<td>" . $row['amt'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
<form action="" method="post">
<input type="text" />
</body>
</html>