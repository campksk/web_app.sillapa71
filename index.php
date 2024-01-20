<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
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

    <div class="container mt-2">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <h1 class="text-center">ขนมเมืองเพชร</h1>
            <img src="images/logo.jpg" alt="" class="img-fluid"> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <b>ขนมเมืองเพชร</b> เป็นคำที่ใช้เรียกขนมที่มีชื่อเสียงและเป็นเอกลักษณ์ของจังหวัดเพชรบุรีซึ่งมีหลายชนิด ตั้งแต่อดีตจนถึงปัจจุบัน ขนมที่เป็นเอกลักษณ์ของเพชรบุรีคือขนมที่ทำมาจากตาลโตนด ขนมที่ทำจากตาลโตนดนี้ได้แก่ มีกล่าวถึงในบทสวดสุบินของเก่า ที่ว่า
    <center>
    <table width="350px">
      <tr>
        <td>&nbsp;&nbsp;ขนมเพชรบุรี</td>
        <td>ใหญ่สิ้นดีทั้งหวานมัน</td>
      </tr>
      <tr>
        <td>ผู้ดีเมืองเพชรนั้น</td>
        <td>เขายกย่องเป็นของดี</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;โตนดเต้าและจาวตาล</td>
        <td>เป็นเครื่องหวานเพชรบุรี</td>
      </tr>
      <tr>
        <td>กินกับน้ำตาลยี</td>
        <td>ของมากมีมาช่วยกิน</td>
      </tr>
      <tr></tr>
    </table>
    </center>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <h2>จาวตาลเชื่อม</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;เป็นการนำจาวตาลระยะที่ 3 ซึ่งเนื้อของจาวตาลแข็งซุยคล้ายจาวมะพร้าว แต่แน่นกว่า นำมาเชื่อมกับน้ำตาล นำไปเป็นส่วนประกิบของขนมอื่นได้อีก เช่น กินกับข้าวเหนียวมูน เป็นต้นโตนดทอด นำจาวตาลเชื่อมาชุบแป้งทอด เป็นขนมดั้งเดิมชนิดหนึ่ง</p>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <h2>ขนมตาล</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;ทำจากลูกตาลที่แก่และสุกงอม นำเนื้อลูกตาลมายีแล้วนำไปผสมกับแป้ง น้ำตาลโตนดและกะทิ คนให้เข้ากัน นำไปนึ่ง สุกแล้วโรยด้วยมะพร้าวขูดโรยงา
ตังเม นำน้ำตาลสดมาเคี่ยวให้งวดด้วยไฟแรงเพื่อทำเป็นน้ำตาลปึก ส่วนที่เป็นน้ำตาลเหนียวๆจับอยู่ที่ขอบกระทะ เรียกตังเม ใช้ใบตองแห้งปาดขึ้นมาก็ได้เป็นขนมหวานอีกชนิดหนึ่ง
ตั้งแต่สมัยรัชกาลที่ 4 เป็นต้นมาจนถึงปัจจุบัน</p>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <h2>ขนมขี้หนู</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;มีชื่อเสียงมาก่อนขนมอื่น รัชกาลที่ 4 โปรดมาก ลักษณะเด่นของขนมขี้หนูเมืองเพชรคือ นุ่ม ไม่หวานจัด หอมด้วยกลิ่นดอกมะลิ โรยด้วยมะพร้าวขูดเป็นเส้นก่อนรับประทาน ปัจจุบันขนมขี้หนูเมืองเพชรเป็นของหารับประทานยาก ผู้ที่ทำได้ส่วนใหญ่อยู่ในวัยชรา
ข้าวเกรียบงา เป็นขนมที่ทาเป็นแผ่น แล้วนำไปตากแดดให้แห้ง จะรับประทานเลยหรือจะนำไปปิ้งก่อนก็ได้ ในระยะแรกใช้เพียงแป้งกับน้ำตาล ละเลงเป็นแผ่นใหญ่และหนากว่าในปัจจุบัน แต่ไม่เป็นที่นิยม จึงมีผู้ดัดแปลงใส่มะพร้าวหั่นเป็นแท่งขนาดเล็กลงไป และเพิ่มงาลงไปอีกอย่างหนึ่ง จึงเป็นข้าวเกรียบงาอย่างที่เห็นอยู่ในปัจจุบัน</p>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <h2>ขนมหม้อแกง</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;มีรสหวานมันและต่างจากขนมหม้อแกงเมืองอื่นตรงที่เนื้อละเอียดแต่ไม่แน่นจนแข็ง ไม่จับเป็นก้อนหรือมีรูพรุน ไม่มีหอมเจียวโรยหน้า</p>
        </div>
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