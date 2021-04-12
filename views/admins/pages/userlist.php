<?php
        if (isset($note)) {
        	echo "<div class='alert alert-danger' style='text-align:center'><h5>";
          	echo $note;
          	echo "</h5></div>";
        }
        if (isset($notes)) {
        	echo "<div class='alert alert-success' style='text-align:center'><h5>";
          	echo $notes;
          	echo "</h5></div>";
        }
      ?>
<h3 style="text-align: center;">Users List </h3>

<table style="text-align: center;" border="1px">
	<tr>
		<td width="10%">Name</td>
		<td width="40%">Email</td>

		<td width="10%">Image</td>
		<td width="10%"></td>
	</tr>
<?php
foreach ($list as $user) {
?>
	<tr>
		<td >
			<?php echo $user->name?>
		</td>
		<td >
			<?php echo $user->email?>
		</td>
		<td>
			<img style="width: 100px; height: 100px" src="./assets/uploads/<?php echo $user->image?>">
			
		</td>
		<td>
			<div class="alert alert-danger" role="alert">
  					 <a href="index.php?controller=adminpages&action=deleteUser&id=<?php  echo $user->id  ?> " class="alert-link">Delete</a>
			</div>
		</td>
	</tr>
<?php
}
?>
</table>