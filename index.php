<!DOCTYPE html>
<html lang="en">
  <head>
    <title>fitness &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body style="background-image: url('images/bg.jpg');">
  
  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Cross<strong>fits</strong></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="has-children">
                        <a href="index.php">หน้าหลัก</a>
                        <ul class="dropdown arrow-top">
                          
                          <li class="has-children">
                            
                            <ul class="dropdown">
                              <li><a href="program.html">Swimming</a></li>
                              <li><a href="program.html">Boxing</a></li>
                              <li><a href="program.html">Running</a></li>
                              <li><a href="program.html">Jogging</a></li>
                              
                            </ul>
                          </li>

                        </ul>
                      </li>
                     
                      
                      
                      <li><a href="contact.php">จองคอร์ส</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- <div style="height: 113px;"></div> -->
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page" style="background-image: url(images/hero_b1_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <!-- <div class="container"> -->
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>ยินดีต้อนรับสู่ฟิตเนส</h1>
              <span class="caption d-block text-white">Find The Healthy Way</span>
            </div>
          </div>
        <!-- </div> -->
      </div>  

      <div class="site-blocks-cover inner-page" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <!-- <div class="container"> -->
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>ออกแบบการออกกำลังกายที่สมบูรณ์</h1>
              <span class="caption d-block text-white">Effective Program</span>
            </div>
          </div>
        <!-- </div> -->
      </div> 
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">เลือกคอร์ส</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <?php 
              
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "fitwhey";
              $conn = new mysqli($servername, $username, $password, $dbname);
              mysqli_set_charset($conn,"utf8");

              $sql = "SELECT * FROM course INNER JOIN category ON course.course_category = category.c_id";
              $result = $conn->query($sql);
              
              while($row = $result->fetch_assoc()) {
              ?>  
              <div class="media-image">
                <img src="admin/images/<?php echo $row["course_img"]?>" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2><?php echo $row["c_name"]?></h2>
                  <p><?php echo $row["course_name"]?></p>
                  <p>ราคา <?php echo $row["course_price"]?></p>
                  <p><a href="http://localhost/sodaza/contact.php" class="btn btn-primary text-white px-4"><span class="caption">จอง</span></a></p>
                </div>
              </div>
              <?php } ?>
  
            </div>
          </div>
        </div>
      </div>
    </div>

    

    
    

    <div class="site-section block-14 bg-light nav-direction-white">

      <div class="container">
        
        

    <footer class="site-footer">
      <div class="container">
        

        
                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>