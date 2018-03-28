
<?php


		if(isset($_POST['edit'])){
			$re=$_REQUEST['rec'];
			setcookie("req",$re,time()+1*60);
			}
			if(isset($_GET['link'])){
			$requ=$_COOKIE['req'];
			$linkk=$_GET['linko'];
			

			$data=mysqli_connect("localhost","root","","crud") or die();
		mysqli_query($data,"UPDATE book SET `link`='$linkk' WHERE `bid`='$requ'");
		header("location:home.php?ed=1");
		
		}
	


	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title><link rel="stylesheet" type="text/css" href="../css/style1.css?version=1051" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1 class="ohk">Give link of new Document...</h1>
	<div class="searchbar">
					<form name="edit" action="edit.php" method="get">
					<input type="text" name="linko"  placeholder="Update..." id="sbar" >
					
					<input id="sbtn" type="submit" name="link" value="Update">
					</form>
					
					
				</div>

	

</body>
</html>