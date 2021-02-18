<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
</head>
<body>

	<form method="post" action="#">
		<fieldset>
			<b><legend >Degree</legend></b>

			<table>
				<tr>
					<td>

<input type="checkbox" name="checkbox[]"  value="<?php if(isset($_POST['submit'])){if(!empty($_POST['checkbox'])){foreach($_POST['checkbox'] as $selected){echo $selected."</br>";}}}?>"> SSC
<input type="checkbox" name="checkbox[]" value="<?php if(isset($_POST['submit'])){if(!empty($_POST['checkbox'])){foreach($_POST['checkbox'] as $selected){echo $selected."</br>";}}}?>"> HSC
<input type="checkbox" name="checkbox[]" value="<?php if(isset($_POST['submit'])){if(!empty($_POST['checkbox'])){foreach($_POST['checkbox'] as $selected){echo $selected."</br>";}}}?>" > BSC<br>

					</td>
				</tr>
			</table>

		</fieldset>
   <input type="Submit" name="submit" >

	</form>
</body>
</html>