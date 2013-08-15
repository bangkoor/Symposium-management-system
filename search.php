0<html>
<head>
<?php include 'db.php';?>
<script Language="JavaScript">
function formValidator(){
	
		// Make quick references to our fields
	
	var dep = document.getElementById('dep');
	var collage = document.getElementById('collage');
 
		// Check each input in the order that it appears in the form!

		if(SelectionDep(dep,"Please select department")){
				if(SelectionCollage(collage,"Please select Collage")){
							return true;						
				
			}
		}
	
	
	
	return false;
	
}
 function SelectionDep(elem, helperMsg){
	if(elem.value == "--------------select---------------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function SelectionCollage(elem, helperMsg){
	if(elem.value == "--------------select---------------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}
</script>
<style type="text/css">

input:focus{
background-color: #FFC;
}
select:focus{
background-color: #FFC;
}
h1
{
font: Georgia, serif;
color: blue;
}

.search
{
border-bottom: 3px solid #cc9900;
font: Georgia, serif;
color: blue;
}
body
{
font: "Trebuchet MS", Verdana, sans-serif;
background-color: white;
color: 696969;
}
#main
{
padding: 30px;
background-color: #ffffff;
border-radius: 0 4px 4px 4px;
width:1000px;
}

ul#menu
{
padding: 0px;
position: relative;
margin: 0;

background-color:#06F;
}

ul#menu li
{
display: inline;

}


ul#menu li a
{
background-color:#36F;
padding: 10px 20px;
text-decoration: none;
line-height: 2.8em;
color:#FFF;
/*CSS3 properties*/
border-radius: 4px 4px 0 0;
}
ul#menu li a:hover{
background-color:#3300CC;}



</style>

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
<div align="left">
<font color="green" ><h2>Search</h2></font>
</div>
<div id="main">
<form action="college_and_department.php" method="post" onsubmit='return formValidator()'>
<fieldset><legend>College and Department</legend>
<table border="0" width="80%"  align="center">
	
    <tr>
    <td>College name</td><td><select name="College" id="College">
	<option>--------------select---------------</option>
<?php
$result = mysql_query("SELECT DISTINCT college FROM participant ");

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['college'] . "</option>";
  }
?>


</select></td>
	
 
	<td>Department</td><td><select name="Department" id="Department" required="required">
<option>--------------select---------------</option>
<?php

$result = mysql_query("SELECT DISTINCT department  FROM participant");

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['department'] . "</option>";

	  }
  
?>


</select></td>
	<td><input type="radio" name="Date" value="21-8-2013" required="required">Day1</td>
	<td><input type="radio" name="Date" value="22-8-2013" required="required">Day2</td>
	<td><input type="radio" name="Date" value="23-8-2013" required="required">Day3</td>
	<td><input type="submit" name="sub"></td>
	</tr>
    </table>
    </fieldset>
        </form>

<form action="department_alone.php" method="post">
<fieldset><legend>Department alone</legend>
<table border="0" width="80%"  align="center">
	
    <tr>
<td>Department</td><td><select name="Department" id="Department" onsubmit='return formValidator()'>
<option>--------------select---------------</option>

<?php

$result = mysql_query("SELECT DISTINCT department  FROM participant");

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['department'] . "</option>";

	  }
  


?>

</select></td>
	<td><input type="radio" name="Date" value="21-8-2013" required="required">Day1</td>
	<td><input type="radio" name="Date" value="22-8-2013" required="required">Day2</td>
	<td><input type="radio" name="Date" value="23-8-2013" required="required">Day3</td>
	<td><input type="submit" name="sub" ></td>
	</tr>
    </table>
        </form>
</fieldset>
<form action="college_alone.php" method="post">
<fieldset><legend>College alone</legend>
<table border="0" width="80%"  align="center">
	
    <tr>
    <td>College name</td><td><select name="College" id="College" onsubmit='return formValidator()'>
	<option>--------------select---------------</option>


<?php
$result = mysql_query("SELECT DISTINCT college   FROM participant");

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['college'] . "</option>";
  }
?>
</select></td>
	<td><input type="radio" name="Date" value="21-8-2013" required="required">Day1</td>
	<td><input type="radio" name="Date" value="22-8-2013" required="required">Day2</td>
	<td><input type="radio" name="Date" value="23-8-2013" required="required">Day3</td>
	<td><input type="submit" name="sub" ></td>
	</tr>
    </table>
        </form>
        </fieldset>
<table>
<tr><td>
<a href="total_summary.php">Click here to total  summary</a></td>

</tr>
<tr><td>
<a href="participated_collages.php">Click here to participated colleges</a></td>
</tr>
</table>

 

</div>
</body>
</html>





