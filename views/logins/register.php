
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
	

<div class="wrapper fadeInDown" align="center">
  <div >
    <!-- Tabs Titles -->

    <!-- Icon -->
    <img src="./assets/images/register.png" height="50px" width="100px">
    <br>

    <!-- Login Form -->
    <form method="post" action="index.php?controller=logins&action=register" enctype="multipart/form-data">
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="Name" required>
      <br>
      <br>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" required>
      <br>
      <br>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
      <br>
      <br>
      <input type="password" id="password" class="fadeIn third" name="re_password" placeholder="Re-password" required>
      <br>
      <p style="margin-left: 582px; text-align: left;">Avatar:</p>
      <input style="margin-left: 107px" type="file" name="avatar" required>
      <br>
      <br>
      <input type="submit" class="fadeIn fourth" name="submit" value="Register">
    </form>

    <!-- Remind Passowrd -->
    
    
  </div>
</div>
