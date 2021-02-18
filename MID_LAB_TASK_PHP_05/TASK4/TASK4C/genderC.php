<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
</head>
<body>

	<form method="post" action="#">
		<fieldset>
			<b><legend >Gender</legend></b>

			<table>
				<tr>
					<td>
					

     <input type="radio" name="radio" value="<?php if(isset($_POST['radio'])){echo "You have selected :".$_POST['radio'];}?>">Male
     <input type="radio" name="radio" value="<?php if(isset($_POST['radio'])){echo "You have selected :".$_POST['radio'];}?>">Female
     <input type="radio" name="radio" value="<?php if(isset($_POST['radio'])){echo "You have selected :".$_POST['radio'];}?>">Other<br>
						
						

				</td>	
				</tr>
			</table>

		</fieldset>
		<input type="Submit" name="submit" >
	</form>
</body>
</html>