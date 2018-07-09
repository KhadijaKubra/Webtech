<?php



$nameErr = $surnameErr = $FathernameErr =$MothernameErr=$SpousenameErr=$DOBErr=$BirthIDNoErr=$cmErr=$GenderErr=$inchErr=$EmailErr=$dualcitizenshipErr=$NationalIDNoErr="";

$Name=$Surname=$Fathername=$Mothername=$Spousename=$DOB=$Gender=$BirthIDNo=$cm=$inch=$Email=$dualcitizenship=$ApplyingIN=$Village_present=$Village_permanent=$Road_permanent=$Road_present=$FirstName=$NationalIDNo=$TaxIDNo="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (empty($_POST["Name"])) 
  {
    $nameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Name)) {
      $nameErr = "Only letters and white space and -  allowed"; 
    }
  }

   if (empty($_POST["Fathername"])) 
  {
    $FathernameErr = "Fathername is required";
  } else {
    $Fathername = test_input($_POST["Fathername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Fathername)) {
      $FathernameErr = "Only letters and white space and -  allowed"; 
    }
  }


 if (empty($_POST["Mothername"])) 
  {
    $MothernameErr = "Mothername is required";
  } else {
    $Mothername = test_input($_POST["Mothername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Mothername)) {
      $MothernameErr = "Only letters and white space and -  allowed"; 
    }
  }

  if (empty($_POST["DOB"])) 
  {
    $DOBErr = "This field is required";
  }



  if (empty($_POST["Surname"])) 
  {
    $surnameErr = "Surname is required";
  } else {
    $Surname = test_input($_POST["Surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Surname)) {
      $surnameErr = "Only letters and white space and -  allowed"; 
    }
  }
  if (empty($_POST["NationalIDNo"])) 
  {
    $NationalIDNoErr = "NationalIDNo is required";
  } else {
    $NationalIDNo = test_input($_POST["NationalIDNo"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{14,}*$/",$NationalIDNo)) {
      $NationalIDNoErr = "Only numbers and minimum 14char allowed"; 
    }
  }

if (empty($_POST["cm"])) 
  {
    $cmErr = "This Field is required";
  } else {
    $cm = test_input($_POST["cm"]);
    
    if (!preg_match("/^([0-9]*)$/",$cm)) {
      $cmErr = "Only numbers allowed"; 
    }
  }

  if (empty($_POST["inch"])) 
  {
    $inchErr = "This Field is required";
  } else {
    $inch = test_input($_POST["inch"]);
    
    if (!preg_match("/^([0-9]*)$/",$inch)) {
      $inchErr = "Only numbers allowed"; 
    }
  }

  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format"; 
    }
  }
    
 


  if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
  } else {
    $Gender = test_input($_POST["Gender"]);
  }


if (empty($_POST["dualcitizenship"])) 
{
    $dualcitizenshipErr = "This Field is required";
  } else 
  {
    $dualcitizenship = test_input($_POST["dualcitizenship"]);
  }}


        setcookie('ApplingIN' , $ApplyingIN, time()+60*60*7);
        setcookie('FirstName', $FirstName, time()+60*60*7);
        setcookie('Surname', $Surname, time()+60*60*7);
        setcookie('Fathername', $Fathername, time()+60*60*7);
        setcookie('Mothername', $Mothername, time()+60*60*7);
        setcookie('Spousename', $Spousename, time()+60*60*7);
        setcookie('DOB', $DOB,time()+60*60+7);
        setcookie('BirthIDNo',$BirthIDNo,time()+60*60*7);
        setcookie('NationalIDNo', $NationalIDNo,time()+60*60*7);
        setcookie('TaxIDNo', $TaxIDNo,time()+60*60*7);
        setcookie('Email', $Email,time()+60*60*7);
        setcookie('Village_present', $Village_present,time()+60*60*7);
        setcookie('Road_present',$Road_present,time()+60*60*7);
        setcookie('Village_permanent', $Village_permanent,time()+60*60*7);
        setcookie('Road_permanent', $Road_permanent,time()+60*60*7);





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['stageone'])){
	$_SESSION['usr'] = array();
	$_SESSION['usr'][] = $_POST['ApplyingIN'];//0
	$_SESSION['usr'][] = $_POST['PassportType'];//1
	//$_SESSION['usr'][] = $_POST['DeliveryType'];//2
	$_SESSION['usr'][] = $_POST['Name'];//2
	$_SESSION['usr'][] = $_POST['FirstName'];//3
	$_SESSION['usr'][] = $_POST['Surname'];//4
	$_SESSION['usr'][] = $_POST['Fathername'];//5
	$_SESSION['usr'][] = $_POST['Fnationality'];//6
	$_SESSION['usr'][] = $_POST['Mothername'];//7
	$_SESSION['usr'][] = $_POST['Fprof'];//8
	$_SESSION['usr'][] = $_POST['Mnationality'];//9
	$_SESSION['usr'][] = $_POST['Mprof'];//10
	$_SESSION['usr'][] = $_POST['Spousename'];//11
	$_SESSION['usr'][] = $_POST['SpouseNation'];//12
	$_SESSION['usr'][] = $_POST['SpouseProf'];//13
	$_SESSION['usr'][] = $_POST['MartialStatus'];//14
	$_SESSION['usr'][] = $_POST['ApplicantProf'];//15
	$_SESSION['usr'][] = $_POST['COB'];//16
	$_SESSION['usr'][] = $_POST['BirthDis'];//17
	$_SESSION['usr'][] = $_POST['DOB'];//18
	$_SESSION['usr'][] = $_POST['BirthIDNo'];//19
    $_SESSION['usr'][] = $_POST['NationalIDNo'];//20
	$_SESSION['usr'][] = $_POST['TaxIDNo'];//21
	$_SESSION['usr'][] = $_POST['cm'];//22
	$_SESSION['usr'][] = $_POST['inch'];//23
	$_SESSION['usr'][] = $_POST['Religion'];//24
	$_SESSION['usr'][] = $_POST['Email'];//25
	$_SESSION['usr'][] = $_POST['Cnationality'];//26
	$_SESSION['usr'][] = $_POST['Cstatus'];//27
	//$_SESSION['usr'][] = $_POST['dualcitizenship'];//27
	$_SESSION['usr'][] = $_POST['Village_present'];//28
	$_SESSION['usr'][] = $_POST['Road_present'];//29
	$_SESSION['usr'][] = $_POST['PresentDis'];//30
	$_SESSION['usr'][] = $_POST['PresentPS'];//31
	$_SESSION['usr'][] = $_POST['PresentPO'];//32
	$_SESSION['usr'][] = $_POST['Village_permanent'];//33
	$_SESSION['usr'][] = $_POST['Road_permanent'];//34
	$_SESSION['usr'][] = $_POST['PermanentDis'];//35
	$_SESSION['usr'][] = $_POST['PermanentPS'];//36
	$_SESSION['usr'][] = $_POST['PermanentPO'];//37
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>STAGE 1</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
	<?php
	session_start();
	
	
	?>

		<h3>PASSPORT APPLICATION STAGE-1</h3>
		<p style="color:red;"><i> Before filling up the form application form read the <ins style="color:blue">guidelines</ins> carefully. </i></p>
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="tables">
			    <table>
				    <tr>
					    <td>
					    <div class="table1">
							
							<table>
								<col width="190">
								
								
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Applying in:<i style="color:red" class="error">*</i></td>
									<td>
										<select class="selections_star" name="ApplyingIN">
												<option value=""> None </option>
												<option value="BANGLADESH" <?php if(isset($_SESSION['usr'][0])) {echo $_SESSION['usr'][0];}?>> BANGLADESH </option>
												<option value="INDIA"  >INDIA</option>
												<option value="PAKISTAN"> PAKISTAN</option>
												 

										</select>
									</td>
								
									
								</tr>
								<tr>
									<td>Application Type:</td>
									<td>NEW APPLICATION</td>
											
								</tr>
								
								<tr>
									<td>Passport Type:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections_star" name="PassportType" required="This field is required" 
										>
											<option value="">None</option>
											<option value="TYpe1">Type1</option>
											<option Value="Type2">Type2 </option>
											<option value="Type3">Type3 </option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Delivery Type:</td>
									<td><input type="radio" name="DeliveryType [<?php echo $i; ?>]" value="Regular">Regular
									<br>
									<input type="radio" name="DeliveryType [<?php echo $i; ?>]" value="Express">Express</td>
								
								</tr>
								
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Name of <br>
									applicant:<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Name" value="<?php echo $Name;?><?php if(isset($_SESSION['usr'][2])) {echo $_SESSION['usr'][2];}?>">
									 <p class="error"><?php echo $nameErr;?></p>
									
									</td>
								
								</tr>
								<tr>
									<td>First Part(Given <br>Name):</td>
									<td>
									<input type="text" name="FirstName" value="<?php if(isset($_SESSION['usr'][3])) {echo $_SESSION['usr'][3];}?>">
									</td>
								</tr>
								<tr>
									<td>Second Part <br>
									(Surname):<i  class="error">*</i>
									</td>
									<td>
									<input type="text" name="Surname" value="<?php echo $Surname;?><?php if(isset($_SESSION['usr'][4])) {echo $_SESSION['usr'][4];}?>">
									 <p class="error"><?php echo $surnameErr;?></p>
									</td>
								
								</tr>
								<tr>
								<td colspan="2">Guardian<input type="checkbox" name="Guardianinfo" value="Guardian"><i style="color:red">"Tick"</i>only if the Applicant is legally adapted 
								</tr>
								<tr>
								<td>Father's name:<i class="error">*</i>
									</td>
									<td>
									<input type="text" name="Fathername" value="<?php if(isset($_SESSION['usr'][5])) {echo $_SESSION['usr'][5];}?><?php echo $Fathername;?>">
									<p class="error"><?php echo $FathernameErr;?></p>
									</td>
								</tr>
								<tr>
								<td>Father's <br> Nationality:<i class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" name="Fnationality" required="This field is required" >
												<option value=""> None</option>
												<option value="BANGLADESH"> BANGLADESH</option>
												<option value="INDIA"> INDIA</option>
												<option value="PAKISTAN"> PAKISTAN</option>
												<option value="CANADA"> CANADA</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mother's name:<i  class="error">*</i>
									</td>
									<td>
									<input type="text" name="Mothername" value="<?php echo $Mothername;?><?php if(isset($_SESSION['usr'][7])) {echo $_SESSION['usr'][7];}?>"
									>
							         <p class="error"><?php echo $MothernameErr;?></p>

									</td>
								</tr>
								<tr>
								<td>Father's <br> Profession:<i class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" name="Fprof" required="This field is required" >
												<option value="">None</option>
												<option value="Doctor">Doctor</option>
												<option value="Professsor">Professsor </option>
												<option value= "Businessman">Businessman</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Mother's <br> Nationality:<i class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" name= "Mnationality" required="This field is required" >
												<option value="">None</option>
												<option value="BANGLADESH"> BANGLADESH</option>
												<option Value="India"> India</option>
												<option value="Pakistan"> Pakistan</option>
												<option value="Canada"> Canada</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mothers's <br> Profession:<i class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" name="Mprof" required="This field is required" >
												<option value="">None</option>
												<option value="Doctor">Doctor</option>
												<option value="Professor">Professor </option>
												<option value="Housewife">Housewife</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Spouse's name:
									</td>
									<td>
									<input type="text" name="Spousename" value="<?php if(isset($_SESSION['usr'][11])) {echo $_SESSION['usr'][11];}?>">
									</td>
								</tr>
								
								
								<tr>
								<td>Spouse's <br> Nationality:
								
									</td>
									<td>
										<select class="selections" name="SpouseNation">
												<option Value=""> -SELECT-</option>
												<option value="BANGLADESH"> BANGLADESH</option>
												<option value="India"> India</option>
												<option Value="Canada"> Canada</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Spouse's <br> Profession:
								
									</td>
									<td>
										<select class="selections" Name="SpouseProf">
												<option value="">None</option>
												<option Value="Doctor">Doctor</option>
												<option value="Businessman">BUsinessman </option>
												<option Value="Engineer">Engineer</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Martial Status:<i style="color:red" class="error">*</i></td>
								<td>
									<select class="selections_star" name="MartialStatus"  required="This field is required">
												<option value="">None</option>
												<option Value="Married">Married</option>
												<option Value="Single">Single </option>
												
									</select></td>
								</tr>
								<tr>
								<td>Applicant's<br>
								Profession:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="ApplicantProf" required="This field is required">
										<option value="">None</option>
										<option Value="Doctor">Doctor</option>
										<option Value="Housewife">Housewife </option>
										<option Value="Engineer">Engineer</option>
										<option value="Student">Student</option>

										</select>
								</td>
								</tr>
								<tr>
									<td>Country of <br>
								      Birth:<i class="error">*
									</td>
									<td>
										<select class="selections_star" name="COB" required="This field is required">
											<option value="">None</option>
											<option value="BANGLADESH"> BANGLADESH</option>
											<option value="Saudi"> Saudi Arabia</option>
											<option value="England"> England</option>
											<option value="Canada"> Canada</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Birth <br>
								      District:<i class="error">*
									</td>
									<td>
										<select class="selections_star" name="BirthDis" required="This field is required">
											<option value="">None</option>
											<option value="Comilla"> Comilla</option>
											<option value="Dhaka"> Dhaka</option>
											<option value="Jeddah"> Jeddah</option>
											<option value="Winnepeg"> Winnepeg</option>
										</select>
									</td>
								</tr>
								
								
								
							</table>
							
							</div>
					    </td>
					    <td>
					    <div class="table2">
						<table>
							<col width="190">
							<tr>
								<td>
								Date of Birth:<i style="color:red" class="error">*
								</td>
								<td><input type="text" name="DOB"  value="<?php if(isset($_SESSION['usr'][18])) {echo $_SESSION['usr'][18];}?>">
								<p class="error"><?php echo $DOBErr;?></p>
								</td>
							</tr>
							<tr>
								<td>
								Gender:<i style="color:red" class="error">*
								</td>
								<td>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Male") echo "checked";?> value="Male">Male <br>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Female") echo "checked";?> value="Female">Female <br>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Other") echo "checked";?> value="Other">Other <br>
							        <p class="error"><?php echo $GenderErr;?>
							        </p><br>
								</td>

							</tr>
							<tr>
								<td>
									Birth ID No.:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<input type:"text" name="BirthIDNo" value="<?php echo $BirthIDNo;?><?php if(isset($_SESSION['usr'][19])) {echo $_SESSION['usr'][19];}?>">
								</td>
							</tr>
							<tr>
								<td>
									National ID No.:
								</td>
								<td>
									<input type:"text" name="NationalIDNo" value="<?php echo $NationalIDNo;?><?php if(isset($_SESSION['usr'][20])) {echo $_SESSION['usr'][20];}?> ">
								</td>
							</tr>
							<tr>
								<td>
									Tax ID No.:
								</td>
								<td>
									<input type:"text" name="TaxIDNo" value="<?php echo $TaxIDNo;?><?php if(isset($_SESSION['usr'][21])) {echo $_SESSION['usr'][21];}?>">
								</td>
							</tr>
							<tr>
								<td>
								Height:<i style="color:red" class="error">*</i>

								</td>
								<td>
								<input type="text" name="cm" class="cm" value=" <?php echo $cm;?><?php if(isset($_SESSION['usr'][22])) {echo $_SESSION['usr'][22];}?>">cm
								 <p class="error"><?php echo $cmErr;?></p>
								</td>
								<td>
								<input type="text" name="inch" class="inch" value="<?php echo $inch;?><?php if(isset($_SESSION['usr'][23])) {echo $_SESSION['usr'][23];}?>"> inch
								 <p class="error"><?php echo $inchErr;?></p>
								</td>
							</tr>
							<tr>
								<td>
								Religion:<i  class="error">*</i>
								</td>
								<td>
									<select class="selections_star" required="This Field is required" name="Religion">
										<option Value="">None</option>
										<option value="Islam">Islam</option>
										<option value="Hindu">Hindu </option>
										<option value="Christian">Christian</option>
									</select>

								</td>

							</tr>
							<tr>
								<td>
								Email:<i class="error">*</i>
								</td>

								<td>
								<input type="text" name="Email" value="<?php echo $Email;?><?php if(isset($_SESSION['usr'][25])) {echo $_SESSION['usr'][25];}?>">
								<p class="error"><?php echo $EmailErr;?></p>
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Citizenship Information</h4></td>
							</tr>
							<tr>
								<td>Nationality:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="Cnationality" required="This field is required">
											<option value="">None</option>
											<option value="Bangladesh"> Bangladesh</option>
											<option value="Indian"> Indian</option>
											<option value="Canadian"> Canadian</option>
											<option value="Pakistan"> Pakistan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Citizenship Status:<i class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="Cstatus" required="This field is required">
											<option value=""> None</option>
											<option value="Birth">Birth </option>
											<option value="Greencard">Greencard </option>
											
									</select>
								</td>
							</tr>
							<tr>
								<td>
								Dual Citizenship:<i class="error">*
								</td>
								<td>
									<input type="radio" name="dualcitizenship" <?php if (isset($dualcitizenship) && $dualcitizenship=="Yes") echo "checked";?> value="Yes">Yes <br>
									<input type="radio" name="dualcitizenship"<?php if (isset($dualcitizenship) && $dualcitizenship=="No") echo "checked";?> value="No">No <br>
									<p class="error"><?php echo $dualcitizenshipErr;?>
								
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Present Address</h4></td>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="Village_present" value="<?php if(isset($_SESSION['usr'][28])) {echo $_SESSION['usr'][28];}?>" >
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="Road_present" value="<?php if(isset($_SESSION['usr'][29])) {echo $_SESSION['usr'][29];}?>">
								</td>
							</tr>
							<tr>
								<td>District:<i class="error">*</i>
								</td>
								<td>
									<select class="selections_star" required="This Field is required" name="PresentDis">
											<option value="">None</option>
											<option value="Comilla
											"> Comilla</option>
											<option value="Dhaka"> Dhaka</option>
											<option value="Chittagong">Chittagong </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i class="error">*</i>
								</td>
								<td>
									<select class="selections_star" required="This item is required" name="PresentPS">
											<option value="">None</option>
											<option value="A">A </option>
											<option value="B">B </option>
											<option value="C">C </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="PresentPO" required="This item is required">
											<option value=""> None</option>
											<option value="A">A </option>
											<option value="B">B </option>
											<option value="C"> C</option>
									</select>
								</td>
							</tr>

							<tr>
							<td colspan="2"><h4 style="color:grey">Permanent Address</h4></td>
							</tr>
							<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add">  Same as above
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="Village_permanent" value="<?php if(isset($_SESSION['usr'][33])) {echo $_SESSION['usr'][33];}?>">
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="Road_permanent" value="<?php if(isset($_SESSION['usr'][34])) {echo $_SESSION['usr'][34];}?>">
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="PermanentDis" required="This field is required">
											<option value="">None</option>
											<option value="A">A </option>
											<option value="B">B </option>
											<option value="C">C </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="PermanentPS" required>
											<option value="">None</option>
											<option value="A"> A</option>
											<option value="B">B </option>
											<option value="C"> C</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" name="PermanentPO" required="This field is required">
											<option value="">None</option>
											<option value="A">A </option>
											<option value="B"> B</option>
											<option value="C"> C</option>
									</select>
								</td>
							</tr>

							<tr>
							<td>
							<input type="submit" name="Save_now_continue" Value="Save Now & Continue in Future"  >
							</td>
							<td>
							<input type="submit" name="stagetwo" Value="Save & Next" formaction="stage2.php">
							</td>
							</tr>








						</table>
						
						</div>
					    </td>
				    </tr>

			    </table>
			</div>
			
		</form>


		<?php

if(exit()){
	session_destroy();
}
?>
	</body>
</html>
