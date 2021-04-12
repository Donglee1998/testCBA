<br>
<br>
<br>
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
    
    <h2 style="text-align: center;">Form change password</h2>
    <!-- Login Form -->
    <form method="post" action="index.php?controller=adminadmins&action=changePass">
    	<table>
    		<tr>
    			<td>
    				 <h5>Enter your password: </h5>
    			</td>
    			<td>
    				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<h5>Enter new password: </h5>
    			</td>
    			<td>
    				<input type="password" id="password" class="fadeIn third" name="password1" placeholder="Password" required>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<h5>Re-enter the password: </h5>
    			</td>
    			<td>
    				<input type="password" id="password" class="fadeIn third" name="re_password" placeholder="Password" required>
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2" align="center">
					 <input type="submit" class="fadeIn fourth" name="edit" value="Change">    				
    			</td>
    		</tr>
    	</table>
    </form>

    <!-- Remind Passowrd -->
    
   
  </div>
</div>
