<!DOCTYPE html>
<html>
<head>
<script language="javascript">
function addDate(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date').value == ''){
document.getElementById('date').value = day + '-' + month + '-' + year;

}
}
</script>


<script src="form.js" type="text/javascript"></script>
<link  rel="stylesheet" type="text/css" href="form.css" >
<script language="javascript">
function gans()
{
	alert("Other option");
	
	other=document.getElementById("other").value;
	if(document.getElementById("collage").value==other)
	{
		alert("othersss");
		document.getElementById("ocl").style.display="block";
			}
	
		}

</script>
</head>
<body onLoad="addDate();">
<h1>SAVEETHA ENGINEERING COLLEGE</h1>
<h2>WELCOME TO DRESTINE'12</h2>
<ul id="menu" style="background-color:#0066FF">
<li  ><a href="index.php">Home</a></li>
<li ><a href="search.php">Participant Details</a></li>
</ul>
<?php
if(isset($_POST['submit']))
{	
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("DRESTEIN", $con);
$sql="INSERT INTO Persons (name,dep,collage,email,pno,amt,date)
VALUES
    ('$_POST[name]','$_POST[dep]','$_POST[collage]','$_POST[email]','$_POST[pno]','$_POST[amt]','$_POST[date]')";
	
	if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
$name = $_POST['name'];
    echo "<div class=note>Mr/Ms : <b> $name </b>";
	echo"\tSucessfully Registered";    
echo "\nStudent ID is : " . mysql_insert_id()."</div>";

	
	    
	mysql_close($con);
}
?>

<div id="main">

<table  width="200" height="400" class="tabledes"><tr><td>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit='return formValidator()'  >
<table border="0" align="center" width="100" height="70%" bgcolor="white">
<center><font color="green" ><h2>REGISTRATION FORM</h2></font></center>
<tr height="5%"><td>Name</td> <td><input type="text" name="name" id="name"></td></tr>
<tr height="5%"><td>Department</td><td><select name="dep" id="dep">
<option>--------------select---------------</option>
<option>AUTOMOBILE ENGINEERING</option> 
<option>CIVIL ENGINEERING</option>
<option>COMPUTER SCIENCE AND ENGG</option>
<option>MECHANICAL ENGINEERING</option>
<option>INFORMATION TECHNOLOGY</option>
<option>ELECTRONICS AND COMMUNICATION ENGG.</option>
<option>ELECTRICAL AND ELECTRONICS ENGG.</option>
<option>AERONAUTICAL ENGINEERING</option>
<option>BIO TECHNOLOGY</option> 
<option>BIO MEDICAL ENGG</option>
<option>PRODUCTION ENGINEERING</option>
<option>ELECTRONICS AND INSTRUMENT ENGG.</option>
<option>MASTER OF COMPUTER APPLICATION</OPTION>
<option>MASTER OF BUSINESS ADMINISTRATION</OPTION>
<option>OTHERS</option>
</select></td></tr>

<tr height="5%"><td>College Name</td><td> 
<select name="collage" id="collage">
<option>--------------select---------------</option>
<option>A.M.S. College of Engineering</option>
<option>Adhiparasakthi College of Engineering</option>
<option>Adhiparasakthi Engineering College</option>
<option>Alpha College of Engineering</option>
<option>Anand Institute of Higher Technology</option>
<option>Annai Teresa College of Engineering</option>
<option>Apollo College of Engineering</option>
<option>Arignar Anna Institute of Science and Technology</option>
<option>Arulmigu Meenakshi Amman College of Engineering</option>
<option>Arunai Engineering College</option>
<option>Asan Memorial College of Engineering & Technology</option>
<option>B.S. Abdur Rahman university</option>
<option>Bhajarang Engineering College</option>
<option>Bharathidasan Engineering College</option>
<option>C.Abdul Hakeem College of Engineering and Technology</option>
<option>Central Institute of Plastic Engineering and Technology</option>
<option>D.M.I. College of Engineering</option>
<option>Dhaanish Ahmed College of Engineering</option>
<option>Dhanalakshmi College of Engineering</option>
<option>Dhanalakshmi Srinivasan College of Engineering and Technology</option>
<option>Dr.Paulïs Engineering College</option>
<option>E.S.College of Engineering and Technology</option>
<option>Easwari Engineering College</option>
<option>G.G.R. College of Engineering</option>
<option>G.K.M. College of Engineering and Technology</option>
<option>Ganadipathy Tulsiïs Engineering College</option>
<option>Gojan School of Business & Technology</option>
<option>Hindustan College of Engineering</option>
<option>I.F.E.T. College of Engineering</option>
<option>Idhaya Engineering College for Women</option>
<option>Indira Institute of Engineering and Technology</option>
<option>J.A.Institute of Engineering & Technology</option>
<option>Jaya Engineering College</option>
<option>Jeppiar Engineering College</option>
<option>Jerusalem College of Engineering</option>
<option>K.C.G. College of Technology</option>
<option>Kalsar College of Engineering</option>
<option>Kamban Engineering College</option>
<option>Kanchi Pallavan Engineering College</option>
<option>Karpagavinayaga College of Engineering and Technology</option>
<option>Kings Engineering College</option>
<option>Lakshmichand Rajani College of Engineering and Technology</option>
<option>Loyola Institute of Technology</option>
<option>Lord Venkateshwara Engineering College</option>
<option>Maamallan Institute of Technology</option>
<option>Madha Engineering College</option>
<option>Magna College of Engineering</option>
<option>Mailam Engineering College</option>
<option>Measi Academy of Architecture</option>
<option>Meenakshi College of Engineering</option>
<option>Meenakshi Sundararajan Engineering College</option>
<option>Misrimal Navajee Munoth Jain Engg. College</option>
<option>Mohamed Sathak A.J. College of Engineering</option>
<option>P.B. College of Engineering</option>
<option>P.M.R. Institute of Technology</option>
<option>P. T. Lee Chengalvaraya Naicker College of Engineering and Technology</option>
<option>Pallavan College of Engineering</option>
<option>Panimalar Engineering College</option>
<option>Prathyusha Institute of Technology and Management</option>
<option>Prince Shri Venkateshwara Padmavathy Engineering College</option>
<option>Priyadarshini Engineering College</option>
<option>R.M.D. Engineering College</option>
<option>R.M.K. Engineering College</option>
<option>Raja Rajeswari Engineering College</option>
<option>Rajalakshmi Engineering College</option>
<option>Rajiv Gandhi College of Engineering</option>
<option>Ranipettai Engineering College</option>
<option>S.A. Engineering College</option>
<option>S.K.P Engineering College</option>
<option>S.K.R. Engineering College</option>
<option>Sakthi Engineering College</option>
<option>Sakthi Mariamman Engineering College</option>
<option>SAMS College of Engineering and Technology</option>
<option>Saraswathi Velu College of Engineering</option>
<option id="sav">Saveetha Engineering College</option>
<option>Shree Motilal Kanhaiyalal Forma Institute of Technology</option>
<option>Shri Andal Alagar College of Engineering</option>
<option>Sree Sastha Institute of Engineering and Technology</option>
<option>Sri Balaji Chockalingam Engineering College</option>
<option>Sri Krishna Engineering College</option>
<option>Sri Lakshmi Ammal Engineering College</option>
<option>Sri Muthukumaran Institute of Technology</option>
<option>Sri Nandhanam College of Engineering and Technology</option>
<option>Sri Padmavathy College of Engineering</option>
<option>Sri Ram Engineering College</option>
<option>Sri Ramanujar Engineering College</option>
<option>Sri Sairam Engineering College</option>
<option>Sri Sivasubramaniya Nadar College of Engineering</option>
<option>Sri Venkateswara College of Engineering</option>
<option>Sri Venkateswara College of Engineering and Technology</option>
<option>Sri Venkateswara Institute of Science and Technology</option>
<option>Srinivasa Institute of Engineering and Technology</option>
<option>SRR Engineering College</option>
<option>St. Joseph College of Engineering</option>
<option>St. Peters Engineering College</option>
<option>T.J. Institute of Technology</option>
<option>Tagore Engineering College</option>
<option>Thangavelu Engineering College</option>
<option>Thirumalai Engineering College</option>
<option>Thiruvalluvar College of Engineering and Technology</option>
<option>V.K.K Vijayan Engineering College</option>
<option>V.R.S. College of Engineering and Technology</option>
<option>Valliammai Engineering College</option>
<option>Vel Multi Tech Sri Rangarajan Sakunthala College of Engineering</option>
<option>Vel High Tech Sri Rangarajan Sakunthala Engineering College</option>
<option>Vel Tech</option>
<option>Vels Srinivasa College of Engineering and Technology</option>
<option>Velammal Engineering College</option>
<option>Hindustan University</option>
<option>Bharath University</option>
<option>Dr. M.G.R. Educational and Research Institute</option>
<option>Meenakshi Academy of Higher Education and Research</option>
<option>Sathyabama University</option>
<option>Saveetha University</option>
<option>Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya</option>
<option>SRM University</option>
<option>St. Peter's University</option>
<option>Vels University</option>
<option>VIT University</option>
<option id="other">others</option>
</select>
</td>

</tr>

<tr height="5%"><td>E-mail</td><td>   <input type="text" name="email" id="email"/></td></tr>
<tr height="5%"><td>Phone No.</td><td>   <input type="text" name="pno" id="pno"/></td></tr>
<tr height="5%"><td>Amount</td><td>   <input type="text" id="amt" name="amt" value="50" readonly/></td></tr>
<tr height="5%">

<td>Date</td><td><input type="text" name="date"  id="date"   readonly/></td>
</tr>
<tr height="5%"><td colspan="2" align="center">   <input type="submit" name="submit" value="Register"></td></tr>
</table>
</form></td>
<td>
<table width="100">
<tr>
<td width="100%">





</td>
</tr>
</table>
</td>
</tr></table>


</div>


</body>
</html>