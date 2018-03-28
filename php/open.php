
<!DOCTYPE html>
<html>
<head>
	<title>open</title><link rel="stylesheet" type="text/css" href="../css/style1.css?version=51" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="open">
	<?php
	if(isset($_POST['download']))
	{
		$re=$_REQUEST['rec'];
		
		$data=mysqli_connect("localhost","root","","crud") or die();
		$auto=mysqli_query($data,"SELECT `link` FROM book WHERE `bid`='$re'");
		$auto=mysqli_fetch_assoc($auto);
		foreach($auto as $id){
		echo "<a href='".$id."'>Click Me and Download</a>";
		}
	}
	?>
</div>
</body>
</html>