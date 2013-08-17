<!DOCTYPE html>
<html>
<head>
	<title>Drestine'13</title>
<script language="javascript">
function addDate(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();
if (document.getElementById('Date').value == ''){
document.getElementById('Date').value = day + '-' + month + '-' + year;
}
}
</script>

 <script src="form.js" type="text/javascript"></script>
<link  rel="stylesheet" type="text/css" href="form.css" >
<script language="javascript">
function checkvalue(val)
{

    if(val==="other")
       document.getElementById('ocollage').style.display='block';
    else
       document.getElementById('ocollage').style.display='none'; 
}
</script>
</head>
<body onLoad="addDate();">
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
<li ><a href="search.php">Report</a></li>

</ul>
</div>
<?php
if(isset($_POST['submit']))
{	
include 'db.php';
$college = $_POST['college'];
$amount = $_POST['amount'];
$hname=gethostbyname($_SERVER['REMOTE_ADDR']);
$hno=gethostbyname($hname);
	if($college=="other")
	{
	$college=$_POST['OtherCollege'];
	}
	
	if($college=="Saveetha Engineering College")
	{
	$amount=0;
	}
$sql="INSERT INTO participant (name,department,college,phone,email,amount,date,ip)
VALUES
    ('$_POST[name]','$_POST[department]','$college','$_POST[phone]','$_POST[email]','$amount','$_POST[date]','$hno')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$name = $_POST['name'];
    echo "<div class=note>Mr/Ms : <b>$name</b>,";
	echo"\tSucessfully Registered,";    
echo "\nStudent ID is : " . mysql_insert_id()."</div>";

	mysql_close($con);
}
?>
<table><tr><td>
<table  width="200" height="400" class="tabledes"><tr><td>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit='return formValidator()'>
<fieldset>
<legend><font color="green"><h2>Registration Form</h2></font></legend>
<table border="0" align="center" width="100" height="70%" bgcolor="white">
<tr height="5%"><td>Name</td> <td><input type="text" name="name" placeholder="First Name" id="Fname"></tr>
<tr height="5%"><td>Department</td><td><select name="department" id="Department">
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
<option>PRODUCTION ENGINEERING</option>
<option>ELECTRONICS AND INSTRUMENT ENGG.</option>
<option>FASHION TECHNOLOGY</option>
<option>INSTRUMENTATION AND CONTROL</option>
<option>METALLURGICAL ENGINEERING</option>
<option>ROBOTICS AND AUTOMATION</option>
<option>TEXTILE TECHNOLOGY </option>
<option>PHARMACEUTICAL TECHNOLOGY</option>
<option>LEATHER TECHNOLOGY</option>
<option>INDUSTRIAL BIO-TECHNOLOGY</option>
<option>FOOD TECHNOLOGY</option>
<option>CHEMICAL ENGINEERING</option>
<option>APPAREL TECHNOLOGY</option>
<option>PRINTING TECHNOLOGY </option>
<option>MANUFACTURING ENGINEERING </option>
<option>MINING ENGINEERING </option>
<option>SOFTWARE ENGINEERING</option>
<option>MATERIALS SCIENCE AND ENGG</option>
<option>GEO-INFORMATICS</option>
<option>AGRICULTURE AND IRRIGATION ENGG</option>
<option>RUBBER AND PLASTIC TECHNOLOGY </option>
<option>PLASTIC TECHNOLOGY </option>
<option>MECHATRONICS </option>
<option>OTHERS</option>
</select></td></tr>

<tr height="5%"><td>College Name</td><td> 
<select name="college" id="College"  onchange='checkvalue(this.value);'> 
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
<option>College of Engineering Guindy</option>
<option>D.M.I. College of Engineering</option>
<option>Dhaanish Ahmed College of Engineering</option>
<option>Dhanalakshmi College of Engineering</option>
<option>Dhanalakshmi Srinivasan College of Engineering and Technology</option>
<option>Dr.Paul�s Engineering College</option>
<option>E.S.College of Engineering and Technology</option>
<option>Easwari Engineering College</option>
<option>G.G.R. College of Engineering</option>
<option>G.K.M. College of Engineering and Technology</option>
<option>Ganadipathy Tulsi�s Engineering College</option>
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
<option>Madras Institute of Technology</option>
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
<option>Saveetha Engineering College</option>
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
<option>Amrita University</option>
<option>Amrita Institute Of Tech& Science</option>
<option>Bannari Amman Institute of Tech</option>
<option>Coimbatore Institute of Technology</option>
<option>Dr.Mahalingam College of Engg. &Tech.</option>
<option>Government College of Tech.,CBE</option>
<option>Hindustan college of Engg.&Tech</option>
<option>Karpagam College of engineering</option>
<option>Kumaraguru College of Tech</option>
<option>Maharaja Engineering College</option>
<option>Park College of Engg.&Tech</option>
<option>S.N.S College of Technology</option>
<option>Sri Jayaram Engineering College</option>
<option>Sri Krishna College of Engg.&Tech</option>
<option>Sri Ramakrishna Engineering College </option>
<option>Sri Ramakrishna Institute of Tech.</option>
<option>Adhiyaman College Of Engineering</option>
<option>Kongu Engineering College</option>
<option>Anna University,Chennai</option>
<option>Sasurie College Of Engineering</option>
<option>M.Kumarasamy College of Engg.</option>
<option>VSB Engineering college</option>
<option>Sona College of Tech.</option>
<option>J.J College of Engg&Tech.</option>
<option>M.A.M College of Engineering</option>
<option>M.I.E.T Engineering College</option>
<option>Mookambigai College of Engineering </option>
<option>National Institute of Technology</option>
<option>Saranathan College of Engineering</option>
<option>Sastra University</option>
<option>A.V.C College of Engineering</option>
<option>Thiagarajar College of Engineering</option>
<option>Raja College Of Engg & Tech.</option>
<option value="other">other</option>
</select>
</td>
<td><input type="text" name="OtherCollege" id="ocollage" style='display:none;'/></td>
</tr>

<tr height="5%"><td>E-mail</td><td>   <input type="text" name="email" id="Email"/></td></tr>
<tr height="5%"><td>Phone No.</td><td>   <input type="text" name="phone" id="Mobile"/></td></tr>
<tr height="5%"><td>Amount</td><td>   <input type="text" id="Amount" name="amount" value="50" readonly/></td></tr>
<tr height="5%">

<td>Date</td><td><input type="text" name="date"  id="Date"   readonly/></td>
</tr>
<tr height="5%"><td colspan="2" align="center">   <input type="submit" name="submit" value="Register"></td></tr>
</table>
</form>
</fieldset></td>

</tr>
</table>

</div>

</div>

</body>
</html>