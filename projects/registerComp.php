<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" src="text/css" href="registerComp.css">
	</head>
	<body>
		<?php
			include'header.php';
		?>
		<div>
			<form method="POST" action="#">

				<fieldset style="width:450px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Company </b>Register</legend>
						<h2>Create Account</h2>
						<table style="margin:0 auto;">
							<tr>
								<td colspan="2">Company Name : </td>
								<td colspan="2"><input type="text" name="cname" placeholder="Company Name" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Owner Name : </td>
								<td colspan="2"><input type="text" name="oname" placeholder="Owner Name" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Company Add. : </td>
								<td colspan="2"><input type="text" name="caddr" placeholder="Company Address" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">City : </td>
								<td colspan="2"><input type="text" name="ccity" placeholder="City" required></td>
							</tr>
							<tr><td><br/></td></tr>


							<tr>
							<td colspan="2">State : </td>
								<td colspan="2">    
									<select name="state">
										<option value="" disabled selected>Select State</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										<option value="Andhra Pradesh">Andhra Pradesh</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Assam">Assam</option>
										<option value="Bihar">Bihar</option>
										<option value="Chandigarh">Chandigarh</option>
										<option value="Chhattisgarh">Chhattisgarh</option>
										<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
										<option value="Daman and Diu">Daman and Diu</option>
										<option value="Delhi">Delhi</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Haryana">Haryana</option>
										<option value="Himachal Pradesh">Himachal Pradesh</option>
										<option value="Jammu and Kashmir">Jammu and Kashmir</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Kerala">Kerala</option>
										<option value="Lakshadweep">Lakshadweep</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Manipur">Manipur</option>
										<option value="Meghalaya">Meghalaya</option>
										<option value="Mizoram">Mizoram</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Orissa">Orissa</option>
										<option value="Pondicherry">Pondicherry</option>
										<option value="Punjab">Punjab</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Tripura">Tripura</option>
										<option value="Uttaranchal">Uttaranchal</option>
										<option value="Uttar Pradesh">Uttar Pradesh</option>
										<option value="West Bengal">West Bengal</option>
									</select>
								</td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Pin Code : </td>
								<td colspan="2"><input type="text" name="pincode" placeholder="Pin Code" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Email ID : </td>
								<td colspan="2"><input type="text" name="cemail" placeholder="Email ID" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Phone No. : </td>
								<td colspan="2"><input type="text" name="cphone" placeholder="Phone Number" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">CRN No. : </td>			<!--Company Regestration Number-->
								<td colspan="2"><input type="text" name="ccrn" placeholder="CRN Number" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Username : </td>
									<td colspan="2"><input type="text" name="cusername" placeholder="Username" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Password : </td>
									<td colspan="2"><input type="password" name="cpwd" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Confirm Password : </td>
									<td colspan="2"><input name="ccpwd" type="password" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr align="center">
								<td colspan="4" align="center"><input type="submit" name="submit" onsubmit="window.location.href = '';" id="btn" value="Submit"></td>
							</tr>
						</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>

<?php
	
	function AddCompanyRegistrationData()
	{
		require 'Connection.php';
		$cname = $_POST['cname'];
		$oname = $_POST['oname'];
		$caddr = $_POST['caddr'];
		$ccity = $_POST['ccity'];
		$state = $_POST['state'];
		$pincode = $_POST['pincode'];
		$cemail = $_POST['cemail'];
		$cphone = $_POST['cphone'];
		$ccrn = $_POST['ccrn'];
		$cusername = $_POST['cusername'];
		$cpwd = $_POST['cpwd'];
		$ccpwd = $_POST['ccpwd'];
		
		if($cpwd == $ccpwd)
		{
			$sql = "INSERT INTO companytable(CName,COwner,CAddress,CCity,CState,CPincode,CEmail,CPhone,CCrn,CUsername,CPwd)
				VALUES ('$cname','$oname','$caddr','$ccity','$state','$pincode','$cemail','$cphone','$ccrn','$cusername','$cpwd')";
				
				if ($con->query($sql) === TRUE) {

				}
				else {
						header("location:registerComp.php");
					}
		}
		else
		{
			echo '<span style = "color:Red;">Password does not match</span>';
		}
	}

	if(isset($_POST['submit']))
	{
		AddCompanyRegistrationData();
	}
?>