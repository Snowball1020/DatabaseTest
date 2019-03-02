<?php 
		require 'Pro2db.php';
	require 'pro2header.php';


		$id = $_GET['id'];

		$sql = 'SELECT * FROM members WHERE id = :id;';

		$statement = $db->prepare($sql);

		$statement->bindParam(':id', $id);

		$statement->execute();
		
		$tunes = $statement->fetchall();

		foreach ($tunes as $tune) {
			$name = $tune['name'];
			$email = $tune['email'];
			$location = $tune['location'];
			$skills = $tune['skills'];

		}




		$statement->closeCursor();





	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['location']) && isset($_POST['skills'])){


		$name = $_POST['name'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		$skills = $_POST['skills'];

		$sql = 'UPDATE members SET name=:name, email=:email, location=:location, skills=:skills WHERE id=:id';
		$statement = $db -> prepare($sql);

		if(empty($name) || empty($email)|| empty($location) || empty($skills)){
			
			echo "<center><h3> Error. Please fill in all blanks. </h3></center>";


		}else if($statement->execute([':name' => $name , ':email' => $email, ':location' => $location,':skills' => $skills,':id' => $id])){

			echo "<center><h3> Data has been succssesfully stored! </h3></center>";

			header('Refresh:3; url=pro2index.php');
		} 


	}



 ?>



 <br/>
 <br/>	

		<div style="text-align: center">
			<h3  style="background-color: lightblue">Please type the data and then click "Update/Confirm" to save the input</h3>

		</div>


 		<div class="card-body">

			<form method="post">


					
					<label for="name" >Name</label>

					<input value="<?php echo $name; ?>" type="text"  name="name" class="form-control">



			
					<label for="email">Email</label>

					<input value="<?php echo $email; ?>" type="email" name="email" class="form-control">


			
					<label for="location">location</label>

					<input value="<?php echo $location; ?>" type="text" name="location" class="form-control">


			
					<label for="skills">Skills</label>

					<input value="<?php echo $skills; ?>" type="text" name="skills" class="form-control">


					<br>
					<br>
					
					<button type="submit" class="btn btn-info">Update / Confirm</button>




			</form>

</div>
<?php require 'pro2footer.php'; ?>
