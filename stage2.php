
<?php  

$Name=$Surname=$Fathername=$Mothername=$Spousename=$DOB=$Gender=$BirthIDNo=$cm=$inch=$Email=$dualcitizenship=$ApplyingIN=$Village_present=$Village_permanent=$Road_permanent=$Road_present=$FirstName=$NationalIDNo=$TaxIDNo="";
$officeNo=$ResidenceNo=$MobileNo=$EmergencyName=$EV_H_Permanent=$ER_B_s_permanent=$ContactNo=$EEmail=$OldPassNo=$OldPlaceofIssue=$OldPassDateofIssue="";
$ContactNoErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["ContactNo"])) 
  {
    $ContactNoErr = "This Field is required";
  } else {
    $ContactNo = test_input($_POST["ContactNo"]);
    
    if (!preg_match("/^([0-9]*)$/",$ContactNo)) {
      $ContactNoErr = "Only numbers allowed"; 
    }
  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

  setcookie('officeNo' , $officeNo, time()+60*60*7);
     setcookie('ResidenceNo', $ResidenceNo, time()+60*60*7);
     setcookie('MobileNo', $MobileNo, time()+60*60*7);
     setcookie('EmergencyName' , $EmergencyName, time()+60*60*7);
     setcookie('EV_H_Permanent', $EV_H_Permanent, time()+60*60*7);
     setcookie('ER_B_s_permanent', $ER_B_s_permanent, time()+60*60*7);
     setcookie('ContactNo' , $ContactNo, time()+60*60*7);
     setcookie('EEmail', $EEmail, time()+60*60*7);
     setcookie('OldPassNo', $OldPassNo, time()+60*60*7);
     setcookie('OldPlaceofIssue', $OldPlaceofIssue, time()+60*60*7);
     setcookie('OldPassDateofIssue', $OldPassDateofIssue, time()+60*60*7);
     




?>



<!DOCTYPE html>
<html>
<head>
	<title>
		STAGE 2
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<?php
	
	session_start();
	

	
	if(!isset($_POST['stageone'])){
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
	
	<h3>PASSPORT APPLICATION STAGE-2</h3>
		
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="tables">
			<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Applicant Contact Information</h4>

									</td>
								</tr>
								<tr>
									<td>Office No.:
									</td>
									<td>
										<input type="text" name="officeNo" value="<?php echo $officeNo;?><?php if(isset($_SESSION['two'][0])) {echo $_SESSION['two'][0];}?>" >
									</td>
								</tr>

								<tr>
									<td>Residence No.:
									</td>
									<td>
										<input type="text" name="ResidenceNo" value="<?php echo $ResidenceNo;?><?php if(isset($_SESSION['two'][1])) {echo $_SESSION['two'][1];}?>" >
									</td>
								</tr>

								<tr>
									<td>Mobile No.:
									</td>
									<td>
										<input type="text" name="MobileNo" value="<?php echo $MobileNo;?><?php if(isset($_SESSION['two'][2])) {echo $_SESSION['two'][2];}?>"">
									</td>
								</tr>
								<tr>
									<td colspan="2"><h4 style="color:grey">Emergency Contact Person's Details</h4></td>
								</tr>
								 <tr>
								 	<td>Name:<i class="error">*</i>
								 	</td>
								 	<td>
								 	<input type="text" name="EmergencyName" value="<?php echo $EmergencyName;?><?php if(isset($_SESSION['two'][3])) {echo $_SESSION['two'][3];}?> " required>
								 	</td>
								 </tr>
								 <tr>
									<td>Country:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections" name="Country" required="This field is required">
											<option value="">None</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="India">India </option>
											<option value="Pakistan">Pakistan</option>
										</select>
									</td>
								</tr>
								<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add"> <i> Same as Permanent Address</i>
							</tr>
							<br>
							<tr>
								<td colspan="2"><input type="checkbox" name="Present_Address" value="Present_Add"><i>  Same as present Address</i>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="EV_H_permanent" value="<?php echo $EV_H_Permanent;?><?php if(isset($_SESSION['two'][4])) {echo $_SESSION['two'][4];}?>">
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="ER_B_s_permanent" value="<?php echo $ER_B_s_permanent;?><?php if(isset($_SESSION['two'][5])) {echo $_SESSION['two'][5];}?>"/>
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="DIstrict" required="This field is required.">
											<option value="">None</option>
											<option value="Comilla">Comilla</option>
											<option value="Dhaka">Dhaka</option>
											<option value="Chittagong">Chittagong</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections"  name=" PS" required="This field is required">
											<option value="">None</option>
											<option value="A">A</option>
											<option value="B">B </option>
											<option value="C">C </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" required="This field is required" name="PO ">
											<option value=""> None</option>
											<option value="A"> A</option>
											<option value="B">B </option>
											<option value="C"> </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Contact No.:<i style="color:red" class="error">*</i>
								</td>
								<td>
								<input type="text" name="ContactNo" value="<?php echo $ContactNo;?><?php if(isset($_SESSION['two'][6])) {echo $_SESSION['two'][6];}?>"">
								 <p class="error"><?php echo $ContactNoErr;?></p>
								</td>
							</tr>
							<tr>
								<td>Email:
								</td>
								<td>
								<input type="text" name="EEmail" value="<?php echo $EEmail;?><?php if(isset($_SESSION['two'][7])) {echo $_SESSION['two'][7];}?>">
								</td>
							</tr>
							<tr>
								<td>
								Relationship:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" required="This field is required">
											<option value=""> None</option>
											<option value="Father"> Father</option>
											<option value="Brother"> Brother</option>
											<option value="Sister"> Sister</option>
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
									<td colspan="2"><h4 style="color:grey">Old Passport Information</h4></td>
								</tr>
								<tr>
									<td>Passport No:
									</td>
									<td>
									<input type="text" name="OldPassNo" value="<?php echo $OldPassNo;?><?php if(isset($_SESSION['two'][8])) {echo $_SESSION['two'][8];}?>">
									</td>
								</tr>
								<tr>
									<td>Place of Issue:
									</td>
									<td>
									<input type="text" name="OldPlaceofIssue" value="<?php echo $OldPlaceofIssue;?><?php if(isset($_SESSION['two'][9])) {echo $_SESSION['two'][9];}?>">
									</td>
								</tr>
								<tr>
									<td>Date Of Issue:
									</td>
									<td>
									<input type="text" name="OldPassDateofIssue" value="<?php echo $OldPassDateofIssue;?> <?php if(isset($_SESSION['two'][10])) {echo $_SESSION['two'][10];}?>">
									</td>
								</tr>
								<tr>
									<td>Re-Issue Reason:
									</td>
									<td>
										<select class="selections">
											<option> -SELECT-</option>
											<option> Lost</option>
											<option> Error</option>
											<option>Invalid</option>
									</select>
									
									</td>
								</tr>
								<tr>
								<td>
								<input type="Submit" name="Previous Page" Class="Buttons" value="Previous Page" formaction="index.php">
								</td>
								<td>
								<input type="Submit" name="Next" Class="Buttons" value="Save & Next" formaction="stage3.php">
								</td>

								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
	</form>
	<br>

	<h1>Result</h1>
	<?php
	foreach($_SESSION['usr'] as $item)
	{
		echo $item;
		echo "<br>";
	}

	?>
	

</body>
</html>


