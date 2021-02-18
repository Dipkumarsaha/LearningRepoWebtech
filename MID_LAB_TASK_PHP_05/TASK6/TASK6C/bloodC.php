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
						<select name="bloodGroup"
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">A+</option>
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">A-</option>
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">B+</option>
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">B-</option>
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">O+</option>
<option value="<?php if(isset($_POST['submit'])){$selected_val = $_POST['bloodGroup']; echo "You have selected :" .$selected_val;}?>">O-</option>
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