
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  

  <title>Tam Đảo-Trang chủ</title>
</head>

<body>
  <header>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="./assets/images/facebook.png"class="icon1"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="./assets/images/instagram.png"class="icon1"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="./assets/images/twitter.png"class="icon1"></a>
      </li>
    </ul>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html">
        <img src="./assets/images/icon-mountain.png" alt="anh logo">
        <p class="text-menu">Tam Đảo-Travel</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item item1">
            <a class="nav-link text-menu li-menu" href="index.php?controller=posts&action=index">Trang Chủ</P></a>
          </li>
          
          
          
          <?php
        
          if (isset($_SESSION["email"])) {
            echo "<li class='nav-item'><a class='nav-link text-menu li-menu' href='index.php?controller=logins&action=showProfile'>Myprofile</a></li>";
            echo "<li class='nav-item'><a class='nav-link text-menu li-menu' href='index.php?controller=logins&action=logout'>Logout</a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link text-menu li-menu' href='index.php?controller=logins&action=view'>Login</a></li>";
          }
        ?>

        </ul>
      </div>
    </nav>
  </header>
  <section>
    <?= @$content ?>
  </section>
  <footer>
    <div class="row footer">
      <div class="col-sm-4 map diachi1">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237668.46215686825!2d105.60187001338616!3d21.446113474791144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134e87a32044fcb%3A0xcb6b2ad2ed13ec5a!2zVGFtIMSQ4bqjbywgVsSpbmggUGjDumMsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1562607171383!5m2!1svi!2s"
          width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-sm-6 map diachi">
        <p class="text-footer"><b style="padding-right: 1rem;">Địa chỉ:</b>Thị Trấn Tam Đảo-Hợp Châu-Vĩnh Phúc</p>
        <p class="text-footer"><b style="padding-right: 1rem;">Website:</b>http://tamdao.vinhphuc.vn</p>
        <p class="text-footer"><b style="padding-right: 1rem;">Điện thoại:</b>0211.3853831</p>
        <p class="text-footer"><b style="padding-right: 1rem;">Fax:</b>0211.3853831</p>
        <p class="text-footer"><b style="padding-right: 1rem;">Email:</b>ubndtamdao@vinhphuc.vn</p>
      </div>
      <div class="col-sm-2 p-0 icon-media">
        <a class="nav-link link-media" href="#"><img src="./assets/images/facebook.png" class="icon-media"><img
            src="./assets/images/instagram.png" class="icon-media"><img src="./assets/images/twitter.png" class="icon-media"></a>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>