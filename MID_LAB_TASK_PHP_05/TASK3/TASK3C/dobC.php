<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
				<legend><b>Date Of Birth</b></legend>
					<table>
						<tr>
							<td>
								<b>dd</b>
							</td>
							<td>
								<b>mm</b>
							</td>
							<td>
								<b>yy</b>
							</td>
						</tr>

						<tr>
							<td>
								<input type="text" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>">/
							</td>
							<td>
								<input type="text" name="mn" value="<?php if(isset($_POST['mn'])){ echo $_POST['mn'];} ?>">/
							</td>
							<td>
								<input type="text" name="yr" value="<?php if(isset($_POST['yr'])){ echo $_POST['yr'];} ?>">/
							</td>
							
						</tr>

					</table>
					<hr width="30%" align="left">
					<input type="Submit" name="submit">
						
						
			</fieldset>



	</form>
	
</body>
</html>