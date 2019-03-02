<?php 

	require 'pro2db.php';

	$message = "";

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['location']) && isset($_POST['skills'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		$skills = $_POST['skills'];

		$sql = 'INSERT INTO members(name,email,location,skills) VALUES(:name, :email, :location,:skills)';
		$statement = $db -> prepare($sql);
		
		if($statement->execute([':name' => $name , ':email' => $email, ':location' => $location , ':skills' => $skills])){
			echo '<center><h2> Thank you!! your data is successfully stored! Going back to Home page... </h2></center>';
			header('Refresh:4; url=pro2index.php');

		} 


	}



 ?>


<?php require 'pro2header.php' ?>

		<br/>

		<div class="header" style="background: gold">
			
			<h2 style="text-align: center;">Please fill in all blanks</h2>

		</div>

			<form method="post">

				  <div class="row justify-content-center">
					
					<label for="name" style="font-size: 150%;">Name</label>

					<input pattern="[A-Za-z_ ]+" style="width: 300px; position: center;" type="text" name="name" class="form-control" required="">

			
					<label for="email" style="font-size: 150%;">Email</label>

					<input style="width: 300px;" type="email" name="email" class="form-control" required="">

					
					<label for="name" style="font-size: 150%;">Location</label>

					<input pattern="[A-Za-z_ ]+" style="width: 300px;" type="text" name="location" class="form-control" required="">

					
					<label for="name" style="font-size: 150%;">Skills</label>

					<input pattern="[A-Za-z0-9_ ]+"style="width: 300px;" type="text" name="skills" class="form-control" required="">

					<br/>
										<br/>
					<br/>


							
					<button type="submit" class="btn btn-success"">Confirm / Add</button>

					</div>

			</form>

<?php require 'pro2footer.php'; ?>
