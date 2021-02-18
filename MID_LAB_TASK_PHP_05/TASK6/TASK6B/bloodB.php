<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['bloodGroup'];  
echo "You have selected :" .$selected_val;  
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
			<b><legend >BlOOD GROUP</legend></b>

			<table>
				<tr>
					<td>

            
					<td>
						<select name="bloodGroup">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</td>
					<td></td>
					</td>
				</tr>
			</table>

		</fieldset>
    <input type="Submit" name="submit" >

	</form>
</body>
</html>