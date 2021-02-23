<?php
	
	
	if(isset($_POST['submit'])){

		
		
		$currentpassword 	= $_POST['currentpassword'];
		$newpassword 	= $_POST['newpassword'];
		$retypepassword 	= $_POST['retypepassword'];

		
		if( $newpassword == $currentpassword){
			echo "Wrong password";
		}else{

			

			if( $newpassword  == $retypepassword ){
				echo"password mathch...";
				
				$_SESSION['status'] = true;
				

			}else{
				echo "invalid user...";
			}
		}
	}
?>