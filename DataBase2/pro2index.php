<?php 

  require 'pro2db.php';

  $sql = 'SELECT * FROM members';
  $statement = $db -> prepare($sql);
  $statement -> execute();
  $members = $statement->fetchAll(PDO::FETCH_OBJ);


 ?>


<?php require 'pro2header.php'; ?>

      <br/>


    <div class = "card-header"> 


      <h2>Welcome to our databese!</h2>

    </div>

      
      <br/>

      <table class="table table-bordered">

      <tr bgcolor="lightgreen">
        
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Skills</th>
        <th>Options</th>

      </tr>



      <?php foreach ($members as $person): ?>


      <tr>
        
        <td  bgcolor="yellow"><?= $person ->id; ?></td>
        <td  bgcolor="#F2F2F2"><?= $person ->name; ?></td>
        <td  bgcolor="#F2F2F2"><?= $person ->email; ?></td>
        <td  bgcolor="#F2F2F2"><?= $person ->location; ?></td>
        <td  bgcolor="#F2F2F2"><?= $person ->skills; ?></td>
        <td bgcolor="#F2F2F2">
          
          <a href="pro2edit.php?id=<?= $person->id ?>" class="btn btn-info btn-sm">Update / Edit</a>
<<<<<<< HEAD
          <a onclick="return confirm('hey this is from another. Are you sure you want to delete this entry??')" href="pro2delete.php?id=<?= $person->id ?>" class="btn btn-danger btn-sm">Delete</a>
=======
          <a onclick="return confirm('Are you sure you want to delete this entry??')" href="pro2delete.php?id=<?= $person->id ?>" class="btn btn-danger btn-sm">Delete</a>
>>>>>>> parent of cd53ba5... FirstChange

        </td>

      <?php endforeach; ?>

      </tr>

      </table>






<?php require 'pro2footer.php' ?>

