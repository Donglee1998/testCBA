<h2 style="text-align:center">User Profile Card</h2>

<div class="card" align="center">

<img style="margin: auto;width: 150px" src='./assets/uploads/<?php echo $user->image?>' >
	

  <h1><?php echo $user->name?></h1>
  <p class="title">Email: <?php echo $user->email?></p>
  <p><a href="index.php?controller=logins&action=viewEdit"><button type="submit">Edit Password</button></a></p>
</div>