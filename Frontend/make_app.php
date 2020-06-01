<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:patient.php");
}
?>
<html>
<head>
<title>Hospital Management System</title>
<style>
body{
	background-color:#232526;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0 auto;
	padding:0px;
}
#apDiv3 {
	position: absolute;
	width: 78px;
	height: 93px;
	z-index: 1;
	left: 86px;
	top: 21px;
}
#apDiv1 {
	position: absolute;
	width: 1070px;
	height: 1264px;
	z-index: 1;
	left: 142px;
	top: 9px;
	color: #CCC;
	background: #648880;
	background: linear-gradient(to top, #f6f1d3 20%, #648880 50%, #293f50 75%);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div.ap6 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
#apDiv2 {
	position: absolute;
	width: 1071px;
	height: 119px;
	z-index: 1;
	left: 0px;
	top: -1px;
	color: #D6D6D6;
	background-color: #CCCCCC;
	background-image: url(img/18691897.jpg);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
	;
}
#apDiv4 {
	position: absolute;
	width: 151px;
	height: 120px;
	z-index: 2;
	/*border-top-left-radius:20px;*/
	border-top-right-radius:70px;
	border-bottom-right-radius:70px;
	border-top-left-radius:70px;
	border-bottom-left-radius:70px;
	background-image: url(img/logo_hospital_01_by_davicinpuntocom-d31hfy2.jpg);
}
#apDiv5 {
	position: absolute;
	width: 785px;
	height: 74px;
	z-index: 1;
	left: 157px;
	top: 27px;
	font-size: 45px;
	font-family: "Comic Sans MS", cursive;
	color: #ffffff;
	font-weight: bold;
	text-shadow: 8px -7px 8px #06F;
}
#apDiv6 {
	position: absolute;
	width: 1071px;
	height: 51px;
	z-index: 3;
	top: 118px;
	background-image: url(img/18691897.jpg);
	font-weight: bold;
	color: #FFF;
	left: 0px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div:hover a {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	/* [disabled]border-radius: 5px; */
	display: block;
	border: 1px solid #133e40;
	-moz-box-shadow: inset 0 5px 10px #133e40;
	-webkit-box-shadow: inset 0 5px 10px #133e40;
	box-shadow: inset 0 5px 10px #133e40;
}
#apDiv6 div:hover {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
a:link
{
	text-decoration: none;
	color: #FFFFFF;
	font-family: "Comic Sans MS", cursive;
	font-size: 20px;
}
#apDiv1  div {
	color: #CFC;
}
#apDiv1 div {
	color: #0CF;
	font-family: "Comic Sans MS", cursive;
}

#apDiv1 div p {
	font-family: 'Comic Sans MS', cursive;
	font-size: 24px;
}
#apDiv7 {
	position: absolute;
	width: 700px;
	height: 300px;
	z-index: 4;
	left: 335px;
	top: 189px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	background-image: url(img/patients-visitors.jpg);
}
#apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}

#apDiv10 {
	position: absolute;
	width: 998px;
	height: 573px;
	z-index: 6;
	left: 32px;
	top: 512px;
}
#apDiv1 #apDiv10 div {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 36px;
	color: #000;
	font-weight: bold;
	text-align: justify;
}
#apDiv14 {
	position: absolute;
	width: 1069px;
	height: 133px;
	z-index: 7;
	left: 0px;
	top: 1131px;
	background-color: #FFFFFF;
}
#apDiv8 {
	position: absolute;
	width: 191px;
	height: 235px;
	z-index: 2;
	left: 2px;
	top: 16px;
	background-color: transparent;
}
#apDiv8 tr td{
	border:1px solid #0CF;
	background-color:#036;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.8);
}
a:hover
{
	color:#CFF;
	font-size:18px;
}
#apDiv11 {
	position: absolute;
	width: 203px;
	height: 110px;
	z-index: 3;
	left: 192px;
	top: 111px;
	background-color: transparent;
	visibility:hidden;
}
#apDiv11 tr td{
	border:1px solid #0CF;
	background-color:#036;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.8);
}
#apDiv12 {
	position: absolute;
	width: 1019px;
	height: 891px;
	z-index: 10;
	left: 26px;
	top: 203px;
}
#apDiv13 {
	position: absolute;
	width: 321px;
	height: 51px;
	z-index: 4;
	left: 404px;
	top: 28px;
}
#apDiv15 {
	position: absolute;
	width: 225px;
	height: 225px;
	z-index: 5;
	left: 793px;
	top: 14px;
}
#apDiv16 {
	position: absolute;
	width: 597px;
	height: 274px;
	z-index: 11;
	left: 223px;
	top: 466px;
	border: 3px solid #033;
	background: #569C94;
	background: radial-gradient( #569C94 30%, #0F374A);
	border-radius: 20px;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
}
#apDiv1 #apDiv16 form table tr th div {
	color: #000;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 24px;
}
#apDiv1 #apDiv16 form table {
	font-family: Tahoma, Geneva, sans-serif;
}
#apDiv1 #apDiv16 form table tr td div {
	font-family: Tahoma, Geneva, sans-serif;
	color: #000;
	font-weight: bold;
	font-size: 16px;
}
</style>
<script type="text/javascript">
function show()
{
	document.getElementById("apDiv11").style.visibility="visible";
}
function hide()
{
	document.getElementById("apDiv11").style.visibility="hidden";
}
function day(str)
{
	//alert(str);
	
    if (str == "") {
        
		document.getElementById("ajax2").style.visibility="hidden";
		document.getElementById("ajax1").style.visibility="visible";
        return;
     } else { 
	 	document.getElementById("ajax2").style.visibility="visible";
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax2").innerHTML = xmlhttp.responseText;
             }
			 document.getElementById("ajax1").style.visibility="hidden";
        }
        xmlhttp.open("GET","getday.php?q="+str,true);
        xmlhttp.send();
    }
}
function time1(str)
{
    if (str == "") 
	{        
		alert("hii");
		document.getElementById("time2").style.visibility="hidden";
		document.getElementById("time1").style.visibility="visible";
        return;
     } 
	 else 
	 { 
	 	document.getElementById("time2").style.visibility="visible";
        if (window.XMLHttpRequest) 
		{      
            xmlhttp = new XMLHttpRequest();
        } 
		else 
		{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
                document.getElementById("time2").innerHTML = xmlhttp.responseText;
            }
			 document.getElementById("time1").style.visibility="hidden";
        }
        xmlhttp.open("GET","gettime.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>
</head>
<body vlink="#FFFFFF">
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv5">
      <div align="left">Hospital Management System</div>
    </div>
</div>
  <div id="apDiv4"></div>
<div id="apDiv6">
    <table width="1071" height="54" border="0">
      <tr>
        <td width="186"><div align="center" id="ap6"><a href="index.html">Home</a></div></td>
        <td width="260"><div align="center"><a href="patient.php">Patient & Visitor's</a></div></td>
          <td width="203"><div align="center"><a href="doctor.php">Doctors</a></div></td>
        <td width="233"><div align="center"><a href="feedback.php">Feedback</a></div></td>
        <td width="167"><div align="center"><a href="contact.html">Contact us</a></div></td>
      </tr>
    </table>
  </div>
<div id="apDiv14">
<div id="copyright">
  <div class="wrapper">
    <p align="center" style="color:#000; font-size:18px;">Copyright &copy; 2020 - All Rights Reserved - <a href="#" style="color:#000; font-size:18px;">PD Hospital</a></p>
    <p align="center" style="color:#000; font-size:18px;">Powered By PD Hospital</p>
     <p align="center" style="color:#000; font-size:18px;">Developed by Piyush Davda&amp; Team - BE (6th Semester)</p>
    <br class="clear" />
  </div>
</div>
</div>
<div id="apDiv12"><hr>
  <div id="apDiv15">
  	<?php
		include("connection.php");
		$uid=$_SESSION['id'];
		$qry=mysqli_query($conn,"select pimage from patient where patientID='$uid'");
		while($row=mysql_fetch_array($qry))
		{
			$image=$row['pimage'];
		}
		print "<img src='imge/";
		print $image;
		print "' height='225px' width='225px'>";
	?>
  </div>
  <div id="apDiv13">Hi,&nbsp;
  <?php
 	include("connection.php");
	$uid=$_SESSION['id'];
	$qry=mysqli_query($conn,"select pname from patient where patientID='$uid'");
	while($row=mysql_fetch_array($qry))
	{
		print "<font style='font-size:22px;'><strong>".$row['pname']."</strong></font>";
	}
     
  ?><hr>
  </div>
<div id="apDiv8">
  <table width="191" height="235" border="0">
    <tr>
      <td width="195"><div align="center"><a href="patient_profile.php">Profile</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="doctor_src.php">Doctors</a></div></td>
    </tr>
    <tr>
      <td  onmouseover="show()" onMouseOut="hide()"><div align="center"><a href="make_app.php">Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="report_download.php">Report</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="p_logout.php">Logout</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv11" onMouseOver="show()" onMouseOut="hide()">
  <table width="203" height="110" border="0">
    <tr>
      <td><div align="center"><a href="make_app.php">Make Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="view_app.php">View Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="cancel_app.php">Cancel Appointment</a></div></td>
    </tr>
  </table>
  </div>
</div>
<div id="apDiv16">
  <form name="form1" method="post" action="confirm_app.php">
    <table width="596" border="0">
    <tr>
    <th height="47" colspan="3" style="font-size:20px; font-weight:bold;"><div align="center">Make Appointment</div></th>
    </tr>
     
      <tr>
        <td width="258" height="43"><div align="right">Doctor Name</div></td>
        <td width="29">&nbsp;</td>
        <td width="295"><label for="doctor"></label>
          <select name="doctor" size="1" id="doctor" onChange="day(this.value)">
          <option value="">Select Doctor</option>
          <?php 
			include("connection.php");
			$qry="select * from doctor";
			$result=mysqli_query($conn,$qry);
			if($result)
			{
				while($row=mysql_fetch_row($result))
				{
					print "<option value='".$row[0]."'>".$row[1]."</option>";
				}
			}
			else
			{
				print mysql_error();
			}
			?>
          </select></td>
      </tr>
      <tr>
        <td height="42"><div align="right">Select Day</div></td>
        <td>&nbsp;</td>
        <td><label for="day1"></label><div id="ajax1"><label for="days"></label>
          <select name="days" size="1" id="days" onChange="time(this.value)"></select></div><div id="ajax2"></div>
        </td>
      </tr>
      <tr>
        <td height="53"><div align="right">Select time</div></td>
        <td>&nbsp;</td>
        <td><label for="time"></label><div id="time1"><label for="time"></label>
          <select name="time" size="1" id="time"></select></div><div id="time2"></div>
         </td>
      </tr>
      <tr>
        <td height="35" colspan="3"><div align="center">
          <input type="submit" name="button" id="button" value="Make">
          <input type="reset" name="button2" id="button2" value="Reset">
        </div></td>
        
      </tr>
    </table>
  </form>
</div>
</div>
</body>
</html>
