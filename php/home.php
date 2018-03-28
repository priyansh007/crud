<?php
if(!isset($_COOKIE['user'])){
	header("location:login.php");
}
if(isset($_GET['create'])){
	header("location:create.php");
}
if(isset($_POST['delete'])){
	$re=$_REQUEST['rec'];
	$data=mysqli_connect("localhost","root","","crud") or die();
	mysqli_query($data,"DELETE FROM book WHERE `bid`='$re'");
	echo "<script type='text/javascript'>alert('Successfully deleted');</script>";
	}
	
	if(isset($_REQUEST['red'])){
		echo "<script type='text/javascript'>alert('Document Created');</script>";
	}
	if(isset($_REQUEST['ed'])){
		echo "<script type='text/javascript'>alert('Document Updated');</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title><link rel="stylesheet" type="text/css" href="../css/style1.css?version=51" title="style">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("h1.ok").click(function(){
        $("#dropdown").hide(1000);
        
        });
    $("div.searchbar").click(function(){
        $("#dropdown").show(1000);
        
    });
    $("div.searchbar").click(function(){
        
        var input = $("div.create");  
        input.animate({left: '550px'}, "slow");
        input.animate({top: '160px'}, "slow");
        input.animate({left: '450px'}, "slow");
    });
    $("h1.ok").click(function(){
    	var input = $("div.create");  
        
       
        input.animate({top: '335px'}, "slow");
        input.animate({left: '10px'}, "slow");
    });

    
});
</script>
</head>
<body>
	<h1 class="ok">Search Me...</h1>
				<div class="searchbar">
					<input type="searchengine" name="sengine" placeholder="Search..." id="sbar" onkeyup="search(this.value)">
					<button id="sbtn">Search</button>
					<div id="dropdown">

					</div>
					
				</div>
				<div class="create" style="position:absolute;height:100px;width:200px;padding-left: 458px">
					<form name="create" action="home.php" method="get"  >
					
					
					<input  style="position:absolute;background-color:#A10507;color: white;text-shadow: 0 -1px 0 #000;border:1px solid #A10507;width:200px;height:35px;border-radius: 3px;" type="submit" name="create" value="Create">
					</form>
				</div>
				
</body>
</html>

<script type="text/javascript">
	function search(val1)
	{if(val1==""){
		document.getElementById("dropdown").innerHTML="";
		return;
	}
	else{

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {

			if (this.readyState == 4 && this.status == 200) {

				document.getElementById("dropdown").innerHTML = this.responseText;	
			}
		};

		xhttp.open("GET", "search.php?id="+val1, true);
		xhttp.send();
	}
}

</script>