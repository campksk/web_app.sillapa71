<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายการขนมหวาน</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
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
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/h1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/h3.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/h2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                 
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>

    <hr>
    <h2 class="text-center">รายชื่อขนมหวาน&nbsp;</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
            
        <?php
        require("connect.php");
        $search = ' ';
        $query_menu = "SELECT * FROM menu";
        $result_menu = mysqli_query($conn, $query_menu);
        while ($row = $result_menu->fetch_assoc()):
        ?>
            <div class="col-md-4 pb-1 pb-md-0" style="margin-bottom: 20px;">
                <div class="card">
                    <img class="card-img-top" src="images\menu\<?php echo($row['pic']); ?>" alt="Card image cap" height="200px">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo($row['name']); ?></h5>
                    <a href="select.php?list=<?php echo($row["menuId"]);?>" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
      </div>
    </div>
    
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