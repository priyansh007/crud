<?php

	

$data=$_GET['id'];
$found=0;
$length=strlen($data);
$dt=mysqli_connect("localhost","root","","crud") or die();
$db=mysqli_query($dt,"SELECT `bid`,`bname`,`authorname`,`subject`,`creationdate` FROM book ");
$tdata="";
foreach($db as $usid){
	$id=$usid['bid'];
	$name=$usid['bname'];
	$aname=$usid['authorname'];
	$sub=$usid['subject'];
	$dat=$usid['creationdate'];
	$i=0;
	$j=0;
	$l=strlen($name);
	$m=strlen($aname);
	$s=strlen($sub);
	if($length<=$l){
		while($i<$l&&$j==0){
				$p=substr($name, $i,$length);

				if(stristr($data,substr($name, $i,$length))&&strlen($p)==$length){
					echo "<table class=searchtbl><tr><td class=row>| $name</td><td class=row>| $aname</td><td class=row>| $sub</td><td class=row>| $dat |</td><td class=row><form method=post action=open.php?rec=$id><input  type=submit name=download value=download id=abtn></form></td>
					<td class=row><form method=post action=edit.php?rec=$id><input type=submit name=edit value=edit id=abtn></form></td>
					<td class=row><form method=post action=home.php?rec=$id><input type=submit name=delete value=delete id=abtn></form></td></tr></table>";
					$found=1;
					$j=1;
				}
			$i=$i+1;
			}
	}
	$i=0;
	if($length<=$m){
			while($i<$m&&$j==0){
				$q=substr($aname, $i,$length);
				if(stristr($data,substr($aname, $i,$length))&&strlen($q)==$length){
					echo "<table class=searchtbl><tr><td class=row>| $name</td><td class=row>| $aname</td><td class=row>| $sub</td><td class=row>| $dat |</td><td class=row><form method=post action=open.php?rec=$id><input type=submit name=download value=download id=abtn></form></td>
					<td class=row><form method=post action=edit.php?rec=$id><input type=submit name=edit value=edit id=abtn></form></td>
					<td class=row><form method=post action=home.php?rec=$id><input type=submit name=delete value=delete id=abtn></form></td></tr></table>";
					$found=1;
					$j=1;
				}
			$i=$i+1;
			}
	}
	$i=0;
	if($length<=$s){
			while($i<$s&&$j==0){
				$q=substr($sub, $i,$length);
				if(stristr($data,substr($sub, $i,$length))&&strlen($q)==$length){
					echo "<table class=searchtbl><tr><td class=row>| $name</td><td class=row>| $aname</td><td class=row>| $sub</td><td class=row>| $dat |</td><td class=row><form method=post action=open.php?rec=$id><input type=submit name=download value=download id=abtn></form></td>
					<td class=row><form method=post action=edit.php?rec=$id><input type=submit name=edit value=edit id=abtn></form></td>
					<td class=row><form method=post action=home.php?rec=$id><input type=submit name=delete value=delete id=abtn></form></td></tr></table>";
					$found=1;
					$j=1;
				}
			$i=$i+1;
			}
	}
	}


	if($found==0){
			echo "<table class=searchtbl><tr><td>no match found</td></tr></table>";
			
		}
?>
