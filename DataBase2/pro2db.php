<?php  

		try {
			//try to connect to the database 
			$db = new PDO('mysql:host=127.0.0.1:54450;dbname=localdb', 'azure','6#vWHD_$');
			//echo a message to tell user they are connected

			echo "<p><center> you are successfully connected with database!</center></p>"; 
			}
	
		catch(PDOException $e) {
			echo "<p> Failed to connect with database.. </p>"; 
			echo $e; 
			}


?>