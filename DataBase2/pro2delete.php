<?php 

require 'pro2db.php';

$id = $_GET['id'];

$sql = 'DELETE FROM members WHERE id = :id';

$statement = $db -> prepare($sql);


if($statement->execute([':id' => $id])){

	header("Location: pro2index.php");

}



 ?>