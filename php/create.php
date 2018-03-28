<?php
$yo="";
if(isset($_GET["createbtn"]))
	{
		$bn=$_GET["book"];
		$an=$_GET["auth"];
		$da=$_GET["cdate"];
		$sb=$_GET["subj"];
		$ln=$_GET["link"];
		$data=mysqli_connect("localhost","root","","crud") or die();
		mysqli_query($data,"INSERT INTO book VALUES('','$bn','$an','$da','$sb','$ln')");
		header("location:home.php?red=1");
		
	}
	if(isset($_REQUEST['em'])){
		
		$yo=$_REQUEST['em'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>create</title><link rel="stylesheet" type="text/css" href="../css/style1.css?version=1051" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="mainback">

			<div class="mainblack">
						<div class="row2">
						<div class="col2">
						<div class="row21">
							Create new Book		
						</div>
						
						<div class="row22">
							<form name="createform" action="create.php" method="get">
								<table class="logintab" >
									<tr>
										<td>Book name:</td><td><input type="text" name="book" class="inputs" id="uid1"></td>
									</tr>
									<tr>
										<td>Author name:</td><td><input type="text" name="auth" class="inputs" id="pwd1"></td>
									</tr>
									<tr>
										<td>Creation Date:</td><td><input type="date" name="cdate" class="inputs" id="uid1"></td>
									</tr>
									<tr>
										<td>Subject name:</td><td><input type="text" name="subj" class="inputs" id="pwd1"></td>
									</tr>
									<tr>
										<td>Link:</td><td><input type="text" value=<?php echo $yo; ?> name="link" class="inputs" id="uid1"></td>
									</tr>
									<tr>
										<td colspan="2"><input id="sbtn" type="submit" name="createbtn" value="Create"></td>
									</tr>
									
								</table>
							</form>
							<form method="post" name="form" action="uploads.php"  enctype="multipart/form-data">
								
										 <input type="file" name="file" id="fileToUpload">
    									 <input id="ssbtn" type="submit" value="Upload File" name="submit">
									
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>