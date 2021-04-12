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
<table align="center">
<form enctype="multipart/form-data" action="http://localhost/test/index.php?controller=adminadmins&action=editAdmin&id=<?php  echo $detail->id  ?>" method="post">
	<tr>
		<td colspan="2"><h2 style="text-align: center">Add Admin</h2></td>
	</tr>
	<tr>
		<td width="30%">
			<h4>Name</h4>
		</td>
		<td>
			<h4><?php echo $detail->name?></h4>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Email</h4>
		</td>
		<td>
			<h4><?php echo $detail->email?></h4>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Role</h4>
		</td>
		<?php if ($detail->role == 'admin') {
		?>
		<td>
				<input checked="checked" type="radio" id="" name="role" value="admin">
				<label for="public">admin</label><br>
				<input type="radio" id="" name="role" value="adminpost">
				<label for="private">adminpost</label><br>
				<input type="radio" id="" name="role" value="adminuser">
				<label for="private">adminuser</label>
		</td>
		<?php
		}elseif ($detail->role == 'adminpost') {
		?>
				<td>
				<input  type="radio" id="" name="role" value="admin">
				<label for="public">admin</label><br>
				<input checked="checked" type="radio" id="" name="role" value="adminpost">
				<label for="private">adminpost</label><br>
				<input type="radio" id="" name="role" value="adminuser">
				<label for="private">adminuser</label>
		</td>
		<?php
		}else{
		?>
		<td>
				<input  type="radio" id="" name="role" value="admin">
				<label for="public">admin</label><br>
				<input type="radio" id="" name="role" value="adminpost">
				<label for="private">adminpost</label><br>
				<input checked="checked" type="radio" id="" name="role" value="adminuser">
				<label for="private">adminuser</label>
		</td>
		<?php
		}
		?>
		
	</tr>
	<tr style="margin-top: 20px">
		<td colspan="2"  align="center"><button type="submit" name="edit">Edit</button></td>
	</tr>
</form>
</table>