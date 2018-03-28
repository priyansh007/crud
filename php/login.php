	<?php
	$result="";
	if(isset($_GET["loginbtn"]))
	{
		$ids=$_GET["userid"];
	    $psswd=$_GET["psswd"];

		$flag=0;

		$data=mysqli_connect("localhost","root","","crud") or die();
		$db=mysqli_query($data,"SELECT `userid` FROM login");
		foreach ($db as $id) {
			if($id['userid']==$ids){
				$flag=1;
				break;
			}
		}
		if($flag==1){
			$db=mysqli_query($data,"SELECT `password` FROM login WHERE `userid`='$ids'");
			$db=mysqli_fetch_assoc($db);
			if($db["password"]==$psswd)
			{
				setcookie("user",$ids,time()+1*60*60);
				header("location:home.php");
			}
			else{
				$result="User Id or Password Incorrect";
			}
		}
		else{
			$result="User Id Not Registered Yet";
		}

	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title><link rel="stylesheet" type="text/css" href="../css/style1.css?version=51" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="mainback">

			<div class="mainblack">
						<div class="row2">
						<div class="col2">
						<div class="row21">
							Log In To Application		
						</div>
						<div class="res"><?php echo $result; ?></div>
						<div class="row22">
							<form name="loginform" action="login.php" method="get">
								<table class="logintab" >
									<tr>
										<td>USER ID:</td><td><input type="text" name="userid" class="inputs" id="uid1"></td>
									</tr>
									<tr>
										<td>PASSWORD:</td><td><input type="password" name="psswd" class="inputs" id="pwd1"></td>
									</tr>
									<tr>
										<td colspan="2"><input id="sbtn" type="submit" name="loginbtn" value="Log In"></td>
									</tr>
									<tr><td text-align="right" colspan="2">
										<a href="signup.php" class="linktosignup">New User?</a>
									</td></tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>