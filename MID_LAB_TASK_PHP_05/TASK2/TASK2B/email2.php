<?php

	
	
	if(isset($_POST['submit'])){

		$email 		= $_POST['myname'];
		
		if($email == "" ){
			echo "null submission...";
		}else{
			echo $email."<br>";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<b><legend>Email</legend></b>
			 <input type="text" name="myname" value=""> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>