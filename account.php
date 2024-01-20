<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลส่วนตัว</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <?php session_start(); ?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" height ="30px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list.php">ขนมหวาน</a>
          </li>

          <?php
            if(isset($_SESSION["account"])) {
              echo ('
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION["account"]["username"].'</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="account.php">ข้อมูลส่วนตัว</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                </div>
                </li>
                ');
            }
            else {
              echo ('
              <li class="nav-item">
              <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
              </li>
              ');
            }
          ?>
          <li class="nav-item">
              <a class="nav-link" href="admin.php">ผู้ดูแลระบบ</a>
            </li>
        </ul>
      </div>
    </nav>
        <?php
        if(!isset($_SESSION["account"])) {
            die(header("location: index.php"));
        }
        ?>
        <br><br>
        <center>
          <div class="col-lg-4 col-12">
          <div class="row mx-0">
            <div class="col-12 card bg-light mx-auto">
              <h3 class="text-center card-header">อัพเดทข้อมูลผู้ใช้</h3>
              <form class="card-body" action="update_acc.php" method="POST">
                <?php
                if(isset($_SESSION['good_up'])){
                  echo ('<p style="color: green">'.$_SESSION["good_up"].'</p>');
                  $_SESSION["good_up"] = null;
                }
                ?>
                <div class="form-group row">
                  <label for="pricefrom" class="col-form-label">ชื่อผู้ใช้</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1" required placeholder="Username" name="username" value="<?php echo($_SESSION["account"]["username"]) ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="priceto" class="col-form-label">อีเมล</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="priceto" aria-describedby="basic-addon2" required placeholder="Email" name="email" value="<?php echo($_SESSION["account"]["email"]) ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="priceto" class="col-form-label">รหัสผ่านเก่า</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="priceto" aria-describedby="basic-addon2" required placeholder="Password" name="password">
                  </div>
                </div>
                <p class="text-center"><input type="submit" class="btn btn-danger" role="button" value="อัพเดทข้อมูล"></p>
              </form>
            </div>
            </center>
        <br><br>

    
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-md-0 mb-2">
          <h2>จัดทำโดย&nbsp;</h2>
          <address>
          โรงเรียนเบญจมเทพอุทิศจังหวัดเพชรบุรี&nbsp;
          </address>
          <h4>Social</h4>
          <div class="row">
            <div class="col-2"><a href="http://bmp.ac.th"><img class="rounded-circle" src="images/32X32.gif" alt=""></div></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <h2>คณะผู้จัดทำ&nbsp;</h2>
          <ul class="list-unstyled">
            <li class="media">
<div class="media-body">
            <h5 class="mt-0 mb-1">นายกฤษกร เอกนก&nbsp;</h5>
                <p class="mb-0"><a href="mailto:st35343@bmp.ac.th">st35343@bmp.ac.th</a></p>
              </div>
            </li>
            <li class="media my-4">
<div class="media-body">
            <h5 class="mt-0 mb-1">นายธนกร กลีบสุวรรณ์&nbsp;</h5>
                <p class="mb-0"><a href="mailto:st35393@bmp.ac.th">st35393@bmp.ac.th</a></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-12">
          <h2>เกี่ยวกับพวกเรา</h2>
          <p>พวกเรามาแข่งขันงานศิลปหัตถกรรมการสร้าง Web App หวังว่าพวกเราจะประสบความสำเร็จ</p>
          
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © BMP 2024. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>