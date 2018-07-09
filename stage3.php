<!DOCTYPE html>
<html>
<head>
	<title>
		STAGE 3
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php

		session_start();
		 error_reporting(0);
		$Name=$Surname=$Fathername=$Mothername=$Spousename=$DOB=$Gender=$BirthIDNo=$cm=$inch=$Email=$dualcitizenship=$ApplyingIN=$Village_present=$Village_permanent=$Road_permanent=$Road_present=$FirstName=$NationalIDNo=$TaxIDNo="";


$officeNo=$ResidenceNo=$MobileNo=$EmergencyName=$EV_H_Permanent=$ER_B_s_permanent=$ContactNo=$EEmail=$OldPassNo=$OldPlaceofIssue=$OldPassDateofIssue="";
		if(!isset($_POST['stagetwo'])){
		$_SESSION['two'] = array();
		$_SESSION['two'][] = $_POST['officeNo'];
		$_SESSION['two'][] = $_POST['ResidenceNo'];
		$_SESSION['two'][] = $_POST['MobileNo'];
		$_SESSION['two'][] = $_POST['EmergencyName'];
		$_SESSION['two'][] = $_POST['EV_H_permanent'];
		$_SESSION['two'][] = $_POST['ER_B_s_permanent'];
		$_SESSION['two'][] = $_POST['ContactNo'];
		$_SESSION['two'][] = $_POST['EEmail'];
		$_SESSION['two'][] = $_POST['OldPassNo'];
		$_SESSION['two'][] = $_POST['OldPlaceofIssue'];
		$_SESSION['two'][] = $_POST['OldPassDateofIssue'];
	}
	?>

	<h3>PASSPORT APPLICATION STAGE-3</h3>
		
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
	<form method="POST" action="yourData.php">
		<div class="tables">
		<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Payment Information</h4>

									</td>
								</tr>
								<tr>
								  <td>Payment Type:
								  </td>
								   <td>
								      <input type="radio" name="fees" value="Online">Online<br>
									  <input type="radio" name="fees" value="Non Online"> Non Online<br>
								    </td>
								</tr>	
								<tr>
								   <td>
								      <input type="checkbox" id="fees">Skip Payment
								    </td>
								</tr>
								<tr>
								 	<td>Ammount:<i style="color:red" class="error">*</i>
								 	</td>
								 	<td>
								 	<select class ="selections" size="0.1" required="This field is required">
								 	    <option value=""> None</option>
									    <option value="BDT">BDT</option>
										<option value="CAD">CAD</option>
										<option value="INR">INR</option>
										<option value="USD">USD</option>
									</select>
									<input type="text" name="currecy" required value="<?php echo $EmergencyName;?><?php if(isset($_SESSION['three'][0])) {echo $_SESSION['three'][0];}?>">
								 	</td>
								 </tr>
								 <tr>
								 <td>Date Of Payment:<i style="color:red" class="error">*</i>
								 </td>
								 <td>
								  <input type="text" name="DateofPayment" required="This field is required" value=<?php echo $EmergencyName;?><?php if(isset($_SESSION['three'][1])) {echo $_SESSION['three'][1];}?>"">
								 </td>
							    </tr>
							    <tr>
								 <td>Receipt No:<i style="color:red" class="error">*</i>
								 </td>
								 <td>
								  <input type="text" name="ReceiptNo" required value=<?php echo $EmergencyName;?><?php if(isset($_SESSION['three'][2])) {echo $_SESSION['three'][2];}?>">
								 </td>
							    </tr>
							    <tr>
								 <td>Name Of the Bank:
								 </td>
								 <td>
									<select class="selections">
											<option> -SELECT-</option>
											<option> Southeast Bank</option>
											<option> Dutch Bangla Bank</option>
											<option> City Nabk</option>
									</select>
								 </td>
							    </tr>
								<tr>
								 <td>Name Of the Branch:
								 </td>
								 <td>
									<select class="selections">
											<option> Banani</option>
											<option> Gulshan</option>
											<option>Uttara </option>
											<option>Badda </option>
									</select>
								 </td>
							    </tr>
								
							</table>
						</div>
					            </td>
					            <td>
						            <div class="table2">
							            <table>
							            	<tr>
								 <td>
								 
								  <input type="Submit" name="Previous Page" Class="Buttons" Value="Previous Page" formaction="stage2.php">
								 
								 </td>
								 <td>
								 
								  <input type="Submit" name="stagethree" Class="Buttons" value="Save & Next"
								  formaction="yourData.php" >
								 
								 </td>
								</tr>
							            </table>
						            </div>
					            </td>

							</table>
					</td>
				</tr>
	</form>
<?php
foreach($_SESSION['usr'] as $item)
	{
		echo $item;
		echo "<br>";
	}


?>
<?php
	foreach($_SESSION['two'] as $item)
	{
		echo $item;
		echo "<br>";
	}
	?>
</body>
</html>