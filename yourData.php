<!DOCTYPE html>
<html>
<head>
	<title>YOUR DATA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	 error_reporting(0);
	session_start();
	if(!isset($_POST['stagethree'])){
		$_SESSION['three'] = array();
		$_SESSION['three'][] = $_POST['currency'];
		$_SESSION['three'][] = $_POST['DateofPayment'];
		$_SESSION['three'][] = $_POST['ReceiptNo'];
	}
		

	?>

		
		<h6 class= "error"><i>Remider before submitting your application</i></h6>
		<ul>
			<li>
			<i>After you click submit you are not allowed to modify your information.</i>
			</li>
			<li>
			<i>Please visit <b>BAGERHAT Branch</b> on any working daywithin next 15 days for biometric capture except government holiday.</i>
			</li>
		</ul>
		<hr style="color:grey">

		<form method="POST" action="">
		<div class="tables">
		<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Personal information Summary</h4>

									</td>
								</tr>
								<tr>
								  <td>Name of Applicant:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['usr'][2])) {echo $_SESSION['usr'][2];}
								      ?>
								    </td>
								</tr>	
								<tr>
								  <td>Second Part(Surname):
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['usr'][4])) {echo $_SESSION['usr'][4];}
								      ?>
								    </td>
								</tr>	
								<tr>
								  <td>First Part(First name):
								  </td>
								   <td>
								     <?php
								      if(isset($_SESSION['usr'][3])) {echo $_SESSION['usr'][3];}
								      ?> 
								    </td>
								</tr>	
								<tr>
								  <td>Gender:
								  </td>
								   <td>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Nationality:
								  </td>
								   <td>
								   <?php
								      if(isset($_SESSION['usr'][26])) {echo $_SESSION['usr'][26];}
								      ?>
								    </td>
								</tr>	
								<tr>
								  <td>Date of Birth:
								  </td>
								   <td>
								   <?php
								      if(isset($_SESSION['usr'][18])) {echo $_SESSION['usr'][18];}
								      ?>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Place of Birth:
								  </td>
								   <td>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Father's Name:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['usr'][5])) {echo $_SESSION['usr'][5];}
								      ?>
								    </td>
								</tr>	
								<tr>
								  <td>Mother's Name:
								  </td>
								   <td>
								   <?php
								      if(isset($_SESSION['usr'][7])) {echo $_SESSION['usr'][7];}
								      ?>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Spouse name:
								  </td>
								   <td>
								    <?php
								      if(isset($_SESSION['usr'][11])) {echo $_SESSION['usr'][11];}
								      ?>  
								    </td>
								</tr>	
								<tr>
								  <td>National ID Number:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['usr'][20])) {echo $_SESSION['usr'][20];}
								      ?>
								    </td>
								</tr>	
								<tr>
								  <td>Birth ID Number:
								  </td>
								   <td>
								    <?php
								      if(isset($_SESSION['usr'][19])) {echo $_SESSION['usr'][19];}
								      ?>  
								    </td>
								</tr>
								<tr>
								  <td>Old Passport Number:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['two'][8])) {echo $_SESSION['two'][8];}
								      ?>
								    </td>
								</tr>
								<tr>
								
								<br>
								<br>
								<br>
								  <td colspan="2"><i class="error"> Reminder:Bring old passport during collectionof MRP;No Correction after handover of delivery slip without fee.</i>
								  </td>
								   
								</tr>	
								
							</table>
						</div>
					            </td>
					            <td>
						            <div class="table2">
							            <table>
							            <tr>
									<td colspan="2"><h4 style="color:grey">Passport information Summary</h4>

									</td>
								</tr>
								<tr>
								  <td>Applying In:
								  </td>
								   <td>
								      
								    </td>
								</tr>
								<tr>
								  <td>Passport type:
								  </td>
								   <td>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Application Type:
								  </td>
								   <td>
								      
								    </td>
								</tr>	
								 <tr>
									<td colspan="2"><h4 style="color:grey">Contact information Summary</h4>

									</td>
								</tr>
								<tr>
								  <td>Mobile Number:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['two'][2])) {echo $_SESSION['two'][2];}
								      ?>
								    </td>
								</tr>
								<tr>
								  <td>Present Address:
								  </td>
								   <td>
								     <?php
								      if(isset($_SESSION['usr'][28])) {echo $_SESSION['usr'][28];}
								      ?>,
								      <?php
								      if(isset($_SESSION['usr'][29])) {echo $_SESSION['usr'][29];}
								      ?> 
								    </td>
								</tr>	
								<tr>
								  <td>Permanent Address:
								  </td>
								   <td>
								     <?php
								      if(isset($_SESSION['usr'][33])) {echo $_SESSION['usr'][33];}
								      ?>
								      <?php
								      if(isset($_SESSION['usr'][34])) {echo $_SESSION['usr'][34];}
								      ?> 
								    </td>
								</tr>			

<tr>
								  <td>Email:
								  </td>
								   <td>
								    <?php
								      if(isset($_SESSION['usr'][25])) {echo $_SESSION['usr'][25];}
								      ?>  
								    </td>
								</tr>
								 <tr>
									<td colspan="2"><h4 style="color:grey">Payment information Summary</h4>

									</td>
								</tr>
								<tr>
								  <td>Payment Amount:
								  </td>
								   <td>
								      <?php
								      if(isset($_SESSION['three'][1])) {echo $_SESSION['three'][1];}
								      ?>
								    </td>
								</tr>
								<tr>
								  <td>Payment Date:
								  </td>
								   <td>
								      
								    </td>
								</tr>	
								<tr>
								  <td>Receipt Number:
								  </td>
								   <td>
								      
								    </td>
								</tr>			

								<tr>
								  <td>Bank Number:
								  </td>
								   <td>
								      
								    </td>
								</tr>
								<tr>
								  <td>Bank Branch:
								  </td>
								   <td>
								      
								    </td>
								</tr>
								
							            	<tr>
								 <td>
								 
								  <input type="Submit" name="Previous Page" Class="Buttons" Value="Previous Page" formaction="stage3.php">
								 
								 </td>
								 <td>
								 
								  <input type="Submit" name="Previous" Class="Buttons" value="Save" >
								 
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
	<?php
	foreach($_SESSION['three'] as $item)
	{
		echo $item;
		echo "<br>";
	}
	?>


</body>
</html>