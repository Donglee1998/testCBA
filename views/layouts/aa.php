

<DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Demo PHP MVC</title>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style type="text/css">
          #footer {
            background: #222;
            border-top: 5px solid #333;
            color: #ccc;
            font-weight: bold;
            height: 50px;
            line-height: 50px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
          }
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?controller=posts&action=index">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          
        </ul>
        
        &nbsp
        <?php
        
          if (isset($_SESSION["email"])) {
            echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' style='margin-right: 20px'><a style='text-decoration: none' href='index.php?controller=logins&action=showProfile'>My Profile</a></button>";
            echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' style='margin-right: 100px'><a style='text-decoration: none' href='index.php?controller=logins&action=logout'>Logout</a></button>";
          }else{
            echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' style='margin-right: 100px'><a style='text-decoration: none' href='index.php?controller=logins&action=view'>Login</a></button>";
          }
        ?>
       
      </div>
    </nav>
    <br>
    <br>
    <br>
    <?= @$content ?>
    <footer id="footer" style="text-align: center;">
      <p>&copy; CBA 2021-2022</p>
    </footer>
  </body>
</html>