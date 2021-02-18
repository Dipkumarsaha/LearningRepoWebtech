<?php

	
	
	if(isset($_POST['submit'])){

		$day 		= $_POST['day'];
		$month 		= $_POST['mn'];
		$year 		= $_POST['yr'];
		

		if($day == "" || $month == "" || $year == "" ){
			echo "null submission...";
		}else{
			echo $day;
			echo $month;
			echo $year;
		}
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Input</title>
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
								<input type="text" name="day" value="">/
							</td>
							<td>
								<input type="text" name="mn" value="">/
							</td>
							<td>
								<input type="text" name="yr" value="">/
							</td>
							
						</tr>

					</table>
					<hr width="30%" align="left">
					<input type="Submit" name="submit">
						
						
			</fieldset>

	</form>
	
</body>
</html>