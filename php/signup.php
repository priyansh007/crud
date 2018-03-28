<?php
$result="";

if(isset($_GET["signupbtn"]))
{
	$flag=0;
	$finame=$_GET["fname"];
	$liname=$_GET["lname"];
	$mail=$_GET["emailid"];
	$uid=$_GET["userid"];
	$passwd=$_GET["psswd"];

	$data=mysqli_connect("localhost","root","","crud") or die();
	$db=mysqli_query($data,"SELECT `userid` FROM login");
	foreach ($db as $id) {
		$a=$id['userid'];
		if($a==$uid)
		{
		 	 $flag=1;
             break;
		}
	}
	
	if($flag==1){
		$result="User id Is Already Registered!!";
	}
	if($flag==0){
		mysqli_query($data,"INSERT INTO login VALUES('$uid','$passwd','$finame','$liname','$mail')");
		setcookie('signup','1',time()+60);
		header("location:login.php");
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css?version=51" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="mainback">

		<div class="mainblack">

			
			<div class="row2" id="row2">
				<div class="col2" id="col2">
					<div class="row21" >
						Sign Up <br>
						<div class="res"><?php echo $result; ?></div>		
					</div>
					<div class="row22" >
						<form name="signupform" action="signup.php" method="get">
							<table class="logintab" >

								<tr>
									<td>FIRST NAME:</td><td><input type="text" name="fname" class="inputs"></td>
								</tr>
								<tr>
									<td>LAST NAME:</td><td><input type="text" name="lname" class="inputs"></td>
								</tr>
								<tr>
									<td>EMAIL ID:</td><td><input type="text" name="emailid" class="inputs"></td>
								</tr>
								<tr>
									<td>USER ID:</td><td><input type="text" name="userid" class="inputs"></td>
								</tr>
								<tr>
									<td>PASSWORD:</td><td><input type="password" name="psswd" class="inputs"></td>
								</tr>
								<tr>
									<td colspan="2"><input id="sbtn" type="submit" name="signupbtn" value="Sign Up"></td>
								</tr>

							</table>
						</form>
					</div>
				</div>
			</div>

		</div>

	</body>
	</html>