<?php

	
	if(isset($_POST['submit'])){

		if(isset($_POST['radio']))
		
		
{
echo "You have selected :".$_POST['radio']; 

}
}
?>








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
					

                       <input type="radio" name="radio" value="male"> Male
                       <input type="radio" name="radio" value="female">Female 
						<input type="radio" name="radio" value="other"> Other<br>
						
						

				</td>	
				</tr>
			</table>

		</fieldset>
		<input type="Submit" name="submit" >
	</form>
</body>
</html>
