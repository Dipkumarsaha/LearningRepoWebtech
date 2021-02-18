<?php


	
	
	if(isset($_POST['submit'])){
		$name 		= $_POST['myname'];
		
		if($name == ""){
			echo "null submission...";
		}else{
			echo $name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<b><legend>Name</legend></b>
			 <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname'];} ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>