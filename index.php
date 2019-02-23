<?php
include("header.php");
 session_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>


<div class="spinner">
<!--   <div class="double-bounce1"></div>
  <div class="double-bounce2"></div> -->
</div>

<body data-spy="scroll" data-target=".navbar" data-offset="50">



<header id="index" class="v-header container">
    <div class="fullscreen-video-wrap">
      <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
      <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
      <video src="asset/bgvideo.mp4" autoplay loop muted>
    </video>
    <!-- <img src="asset/about/3.jpg"> -->
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center animated fadeInUp">
      <div class="container">
        <h1>ห้างหุ้นส่วนจำกัด ทองประทีป แมชชีนเนอรี่</h1>
        <br><br>
        <p>รับ ออกแบบผลิตชิ้นส่วนเครื่องจกกล งานอะไหล่ งานซ่อมบำรุง งานสร้างเครื่อง รับสร้างเครื่องจักรกลและผลิตชิ้นส่วนเครื่องจักรกลทุกชิ้น รับจ้างกลึง กัด ไส เจียรไนร เจาะเชื่อมประกอบ และซ่อมเครื่องจักรกล รับ ออกแบบผลิตชิ้นส่วนเครื่องจกกล งานอะไหล่ งานซ่อมบำรุง งานสร้างเครื่อง </p> 
          <a href="#about" class="scrollanimate"><button type="button" class="btn">เกี่ยวกับเรา</button></a>
      </div>
    </div>

     
    
     
  </header>
  
  <!-- Nav -->
       <nav id="nav" class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top=""> 
        <div class="container">  
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand scrollanimate" href="#index"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul id="ul-nav" class="nav navbar-nav navbar-right">
                <li><a class="scrollanimate" href="#about"><span>เกี่ยวกับเรา</span></a></li>
                <li><a class="scrollanimate" href="#product"><span>ผลงานของเรา</span></a></li>
                <li><a class="scrollanimate" href="#customer"><span>ลูกค้าของเรา</span></a></li>
                <li><a class="scrollanimate" href="#contact-us"><span>ติดต่อเรา</span></a></li>
              </ul>
            </div>
        </div> 
      </nav>


<!-- Section About -->
   <div id="about" class="container-fluid-nav about">
 
    <div class="container" style="padding:6em 0">
      <div class="col-md-7" style="text-align: left">
      <h2>เกี่ยวกับเรา</h2>
      <p>บริษัท ชาญชัย เวิร์ค เอ็นจิเนียริ่ง จำกัด ดำเนินธุรกิจเกี่ยวกับการออกแบบไฟฟ้าและสื่อสาร, FIRE ALARM, ระบบปรับอากาศ, CCTV, MATV, SOUND และจัดจำหน่ายอุปกรณ์ไฟฟ้าทุกชนิด ทั้งโรงงาน อาคาร บ้าน บริษัทฯ มีนโยบายที่จะขยายตลาดไปสู่กลุ่มลูกค้าทุกแขนง โดยรับประกันคุณภาพของผลงาน และราคาย่อมเยา ดำเนินงานโดยทีมวิศวกรและช่างผู้ชำนาญการมากกว่า 10 ปี
อีกทั้งบริษัทฯ ยังรับผลิตตู้ MDB, PANEL, โครงตู้น้ำมัน, โครงตู้เติมเงินออนไลน์ และตู้อุปกรณ์ไฟฟ้าต่าง ๆ เป็นต้น รวมถึงรับผลิตชิ้นส่วนเครื่องจักรอุตสาหกรรมตามแบบ
บริษัทฯ ดำเนินการทำงานตามหลักของสภาวิศวกรรมแห่งประเทศไทย (วศท.) เพื่อให้ได้งานที่มีคุณภาพมาตรฐานระดับสากล เราเติบโตไปพร้อมกับการขยายธุรกิจของลูกค้า เราได้รับความไว้วางใจจากลูกค้าเสมอมา อันแสดงความถึงความเชื่อมั่นในความรับผิดชอบต่องานที่ได้รับมอบหมาย เราพึงตระหนักถึงความไว้วางใจจากลูกค้า เราจึงทำงานด้วยความซื่อสัตย์และซื่อตรงเพื่อรักษาคุณภาพของการบริการ โดยเน้นการบริการลูกค้าด้วยความจริงใจ</p>
      </div>
      <div class="col-md-5 carousel-about">
          <!-- carousel -->
                        <div class="owl-carousel owl-theme about">
                          <div class="item-about"><img src="asset/about/1.jpg" alt=""></div>
                          <div class="item-about"><img src="asset/about/2.jpg" alt=""></div>
                          <div class="item-about"><img src="asset/about/3.jpg" alt=""></div>
                          <div class="item-about"><img src="asset/about/4.jpg" alt=""></div>
                          <div class="item-about"><img src="asset/about/5.jpg" alt=""></div>
                          <div class="item-about"><img src="asset/about/6.jpg" alt=""></div>
                       </div>
      </div>
    </div>
   </div>



<!-- Section Product -->
   <div id="product" class="container-fluid product">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <div class="container">
          <h2>ผลงานของเรา</h2>
         <p> ทั้งนี้บริษัทฯ ยังได้ขยายสายงานการผลิตเป็นโรงงานตัดด้วยเครื่อง LASER, พับ, ผลิตโครงสร้าง, เชื่อม-ประกอบตู้ MDB, PANEL, ตู้ SIZE ต่าง, โครงสร้างตู้น้ำมัน, ตู้เติมเงินออนไลน์, ล็อคเกอร์ และ Furniture ตามแบบของลูกค้า เป็นต้น โดยมีทีมงานดีไซเนอร์ดูแลเพื่อให้ได้ผลงานที่ให้ตรงใจลูกค้า </p>


            <div class="product-type" style="padding:1.5em">
              <!--   <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                    <figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure>
                    <p> งานสร้างเครื่องจักร </p>   
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                     <figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure>
                     <p> งานผลิตชื้นส่วน </p>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                    <figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure>
                    <p> งานเชื่อมโครงสร้าง </p>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                     <figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure>
                     <p> งานออกแบบ </p> 
                  </a>
                </div>
                 <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                    <figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure>
                    <p> งานซ่อมบำรุง </p> 
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                     <figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure>
                     <p> งานดัดแปลง </p>
                  </a>
                </div> -->
                 <p> งานสร้างเครื่องจักร </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                           <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                           <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                           <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                           <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                           <div class="item-product">
                            <figure>
                              <img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt="">  
                            </figure>
                            <div class="product-description">
                              <h6 class="iq-tw-6">Ria Somani</h6>
                              <p>CEO, TheOne</p>
                            </div>
                          </div>
                        
                </div>
                   <p> งานผลิตชื้นส่วน </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
                   <p> งานเชื่อมโครงสร้าง </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
                   <p> งานสร้างเครื่องจักร </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
                   <p> งานออกแบบ </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
                   <p> งานซ่อมบำรุง </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
                    <p> งานดัดแปลง </p>   
                 <div class="owl-carousel owl-theme product">
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/1.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/2.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/3.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/4.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/5.jpg" alt=""></figure></div>
                          <div class="item-product"><figure><img class="img-fluid img-thumbnail" src="asset/product/6.jpg" alt=""></figure></div>
                </div>
          </div>
        </div>


        <!-- The Modal -->
 <!--        <div id="myModal" class="modal">
            <i class="fas fa-times"></i>

                  <div class="col-md-2 col-sm-6">
                     <i class="fas fa-chevron-left"></i>
                  </div>

                  <div class="col-md-8 col-sm-12">
                      <img class="modal-content" id="img01">
                      <div id="caption"></div>
                  </div>

                  <div class="col-md-2 col-sm-6">
                       <i class="fas fa-chevron-right"></i>
                  </div>

        </div> -->

      
   </div>
<!-- Section Customer -->
 <div id="customer" class="container-fluid customer">
  <div class="container">

      <h2>ลูกค้าของเรา</h2>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <figure><img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt=""></figure>
            
          </a>
        </div>
       
   
      </div>

    </div>

</div>


<!-- Section Contact US -->
   <div id="contact-us" class="container-fluid contact-us">
        <div class="container">
            <h2>ติดต่อเรา</h2>
            <div class="col-md-6" >
                <div class="contact-form">  
                    <form id="contactForm">
                    <br style="clear:both">
                                <h3 style="margin-bottom: 25px; text-align: center;">ข้อมูลการติดต่อกลับ</h3>

                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อผู้ติดต่อ" required>
                      </div>

                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์" required>
                      </div>

                      <div class="form-group">
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="เบอร์โทรศัพท์" required>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="เรื่อง" required>
                      </div>

                      <div class="form-group">
                          <textarea class="form-control" type="textarea" id="messages" name="messages" placeholder="รายละเอียด" maxlength="500" rows="10"></textarea>                         
                      </div>
                      <div align="center">
                      <div class="g-recaptcha" data-sitekey="6LdX-m0UAAAAAJ_8P99WgXfSYuZKIv7G-wn8jyQv" ></div>
                      </div>

                        <br>
                    <center><button type="submit" name="submit" class="btn">ส่งข้อความ</button></center>

                    </form>
                      <span class="help-block"><p id="characterLeft" class="help-block ">***เมื่อเราได้รับเมลล์เราจะติดต่อกลับโดยทันที</p></span> 
                      <div id="msgerr"></div>
                </div>

                
           <!--      <div class="contact-channel"
                          <p>หากไม่สะดวกใช้อีเมลล์</p>
                          <p><i class="fas fa-mobile-alt"></i> 0868890226,0894077868</p>
                          <p><i class="fab fa-facebook-square"></i><a id="link" href="https://www.facebook.com/Thongpratheepmahinenery/"> facebook.com/Thongpratheepmahinenery/</a></p>
                          <p><i class="fab fa-line"></i><a id="link" href="http://line.me/ti/p/~nuttsna"> @tpmlp</a></p>
                </div> -->
            </div>
            <div class="col-md-6">
                <br style="clear:both">
               <h3 style="margin-bottom: 25px; text-align:center;">แผนที่</h3>
               <iframe id="map" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%AB%E0%B8%88%E0%B8%81.%20%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B8%9B%20%E0%B9%81%E0%B8%A1%E0%B8%8A%E0%B8%8A%E0%B8%B5%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3%E0%B8%B5%E0%B9%88%20Phahon%20Yothin%2048%20Alley%2C%20Lane%2060%2C%20Tha%20Raeng%2C%20Bang%20Khen%2C%20Bangkok&key=AIzaSyAiOaOaOqtypn-v_8FVNIoh2fFsUNYJ4_4" allowfullscreen></iframe>
            <div class="location">
               <p><h5> ห้างหุ้นส่วนจำกัด ทองประทีปแมชชีนเนอรี่</h5></p>
               <p><i class="fas fa-home"></i> 43 ซอย พหลโยธิน 48 แยก 60 แขวง ท่าแร้ง เขต บางเขน กรุงเทพฯ 10220</p>
               <p><i class="fas fa-clock"></i> เปิดให้บริการ : จันทร์ – เสาร์ เวลา 8.00  – 17.00 </p>
               <p><i class="fas fa-mobile-alt"></i> 086 889 0226,083 014 6160</p>
               <p><i class="fas fa-fax"></i> 02-8888 8888</p>
               <p><i class="fas fa-envelope"></i> tpmlp.work@gmail.com</p>   
               <p><i class="fab fa-facebook-square"></i><a id="link" href="https://www.facebook.com/Thongpratheepmahinenery/"> facebook.com/ThongpratheepMahinenery </a></p>
               <p><i class="fab fa-line"></i><a id="link" href="http://line.me/ti/p/~nuttsna"> @tpmlp</a></p>
    
            </div>
               
            </div>
        </div>
   </div>


   <!-- Footer -->
<footer class="page-footer">

 
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
          
            <div class="line1">
                <p>  ติดตามเราได้ที่ </p>
                <p> <a id="link" href="https://www.facebook.com/Thongpratheepmahinenery/"> <img class="img-follow" src="asset/icon/icon-fb.png">  ThongpratheepMahinenery</a> </p>
                <p><a id="link" href="http://line.me/ti/p/~nuttsna"><img class="img-follow" src="asset/icon/icon-line.png"> @ThongpratheepMahinenery</a></p>
            </div>
            <div class="line2">
                <p>Thongpratheep Mahinenery ©2018 All rights reserved | Powered by<a href="https://www.facebook.com/phatcharapol.nut"> PHATCHARAPOL T.</a></p>
            </div>
       
          </div>
        </div>
      </div>

 
</footer>
<!-- Footer -->


<script type="text/javascript">


// $("img").click(function(){
// swal({
//           title: 'กำลังส่งข้อความ...',
         
//         }) ;
//          swal.showLoading() ;
// });
 


  $("#contactForm").submit(function(event){

    event.preventDefault(); 
    form = $(this);
     $.ajax({
        type: "POST",
        url: "process_mail.php",
        data: form.serialize(),
        success : function(text){
                  if(text === 'Success'){ 
                       swal({
                              type: 'success',
                              title: 'ส่งข้อความสำเร็จ',
                              text: 'ทางเราได้รับข้อความของท่านแล้ว จะรีบติดต่อกลับไปทันทีครับ!'
                            }) ;
                 }else{
                      swal({
                            type: 'error',
                            title: 'ส่งข้อความไม่สำเร็จ',
                            text: text
                          });
                 }
  
        }
      });
    });
    $(document).ajaxStart(function(){
        swal({
          title: 'กำลังส่งข้อความ...',
        }) ;
         swal.showLoading() ;
    });
    $(document).ajaxComplete(function(){
        $(".swal2").css("display", "none");
    });
</script>


      <!--<div id="BtnFilter">
              <button type="button" class="btn btn-secondary" onclick="filterSelection('All')">All</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('A')"> Type A</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('B')"> Type B</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('C')"> Type C</button>
          </div> -->


<!-- 
  <script type="text/javascript">
                    //Image Modal
                      // Get the modal
                       var modal = document.getElementById('myModal');
                      // Get the image and insert it inside the modal - use its "alt" text as a caption
                      var modalImg = document.getElementById("img01");
                      var captionText = document.getElementById("caption");
                      var arr_img = [] ;
                      var arr_des = [] ;
                      // Modal Image
                      $('img').click(function(){
                          modal.style.display = "block";
                          modalImg.src = this.src;
                          captionText.innerHTML = this.alt;
                           var key=arr_img.indexOf(modalImg.src) ;
                            if(key === 0){
                                $(".fa-chevron-left").hide() ;
                                $(".fa-chevron-right").show() ;
                            }else if(key === arr_img.length-1){
                                $(".fa-chevron-right").hide() ;
                                $(".fa-chevron-left").show() ;
                            }else{
                                $(".fa-chevron-left").show() ;
                                $(".fa-chevron-right").show() ;
                            }                   

                      }) ; 
                      // Next/Prev/Close Image
                        $(".fa-chevron-right").click(NextImg) ;
                        $(".fa-chevron-left").click(PrevImg) ;
                        $(".fa-times").click(CloseImg) ;
                         
                      function NextImg(){
                           var key=arr_img.indexOf(modalImg.src) ;
                           key++ ;
                           modal.style.display = "block";
                           modalImg.src = arr_img[key];
                           captionText.innerHTML = arr_des[key];
                           if(key === arr_img.length-1)
                            $(".fa-chevron-right").hide() ;
                           else{
                            $(".fa-chevron-left").show() ;
                            $(".fa-chevron-right").show() ;
                          }
                      }
                      function PrevImg(){
                           var key=arr_img.indexOf(modalImg.src) ;
                           modal.style.display = "block";
                           key-- ;
                           modalImg.src = arr_img[key] ;
                           captionText.innerHTML = arr_des[key];  
                           if(key === 0)
                            $(".fa-chevron-left").hide() ;
                           else{
                            $(".fa-chevron-left").show() ;
                            $(".fa-chevron-right").show() ;
                          }                   
                      }
                      function CloseImg(){
                           modal.style.display = "none";
                      }
          
                    // Filter Product
                     filterSelection("All") ;
                      function filterSelection(c) {
                        var section, i;
                        section = document.getElementsByClassName("row");
                        if (c == "All") c = "";
                        for (i = 0; i < section.length; i++) {
                          w3RemoveClass(section[i], "show");
                          w3RemoveClass(section[i], "hide");
                          if (section[i].className.indexOf(c) > -1) 
                            w3AddClass(section[i], "show");
                          else
                            w3AddClass(section[i], "hide");
                        }
                     
                         $(".hide").hide(500) ;
                         $(".show").addClass("magictime swashIn") ; 

                              //Dump all fillter img to array
                              var img = $(".show img.img-thumbnail") ;
                              for(var i=0 ; i<img.length ; i++){
                                arr_img.push(img[i]['src']) ;
                                arr_des.push(img[i]['alt']) ;
                              }
                          
                      }

                      function w3AddClass(element, name) {
                        var i, arr1, arr2;
                        arr1 = element.className.split(" ");
                        arr2 = name.split(" ");
                        for (i = 0; i < arr2.length; i++) {
                          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                        }
                      }

                      function w3RemoveClass(element, name) {
                        var i, arr1, arr2;
                        arr1 = element.className.split(" ");
                        arr2 = name.split(" ");
                        for (i = 0; i < arr2.length; i++) {
                          while (arr1.indexOf(arr2[i]) > -1) {
                            arr1.splice(arr1.indexOf(arr2[i]), 1);     
                          }
                        }
                        element.className = arr1.join(" ");

                        // Clear fillter
                        arr_img = [] ;
                        arr_des = [] ;
                      }

                </script> -->



</body>

</html>