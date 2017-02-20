<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
function mysql_upload ($arg1, $arg2){
			$con = mysql_connect("testproject.org","test_user","catisko7");
			if (!$con){
	  			die('Could not connect: ' . mysql_error());
	  		}
	 
			mysql_select_db("TEST_DB", $con);
	 
			$sql="INSERT INTO TEST_TAB (name, text) VALUES ('$arg1','$arg2')";
	 
			if (!mysql_query($sql,$con)) {
	  			die('Error: ' . mysql_error());
	  		}
	 
			mysql_close($con);
		}
?>
</body>
</html>