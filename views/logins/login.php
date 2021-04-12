<br>
<br>
<br>
<div class="wrapper fadeInDown" align="center">
  <div >
    <!-- Tabs Titles -->

    <!-- Icon -->
    <img src="./assets/images/login.png" height="50px" width="50px">
    <br>
    <br>
    <!-- Login Form -->
    <form method="post" action="index.php?controller=logins&action=login">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" required>
      <br>
      <br>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
      <br>
      <br>
      
      <input type="submit" class="fadeIn fourth" value="LogIn">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php?controller=logins&action=viewRegister">Register</a>&nbsp
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    <h5>
      <?php
        if (isset($note)) {
          echo $note;
        }
      ?>
    </h5>
  </div>
</div>
