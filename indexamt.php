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
<form action="amount.php" method="post" onsubmit='return formValidator()'>
select the system address:<select name="report" id="report">
<option>---select---</option>
<option>192.168.0.1</option>
<option>192.168.0.3</option>
<option>192.168.0.4</option>

<option>192.168.0.5</option>
<option>192.168.0.6</option>
<option>192.168.0.7</option>
<option>192.168.0.8</option>
</select>

</td>
	<td><input type="radio" name="Date" value="5-9-2012" required="required">Day1</td>
	<td><input type="radio" name="Date" value="6-9-2012" required="required">Day2</td>
	<td><input type="radio" name="Date" value="7-9-2012" required="required">Day3</td>
	<td><input type="submit" name="sub" ></td>
	</tr>
    </table>
    click here to overall summary:<td><input type="radio" name="Date" value="5-9-2012" required="required">Day1</td>
	<td><input type="radio" name="Date" value="6-9-2012" required="required">Day2</td>
	<td><input type="radio" name="Date" value="7-9-2012" required="required">Day3</td>
	<td><input type="submit" name="sub" ></td>
        </form>
</body>
</html>