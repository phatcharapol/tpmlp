<?php
include("user_tracking.php") ;
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>

</head>


<!-- <div class="spinner">
</div> -->

<body data-spy="scroll" data-target=".navbar" data-offset="50">



<header id="index" class="v-header container">
    <div class="fullscreen-video-wrap">
      <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
      <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
  <!--     <video src="asset/bgvideo.mp4" autoplay loop muted>
    </video> -->
    <img src="asset/about/3.jpg">
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center animated fadeInUp">
      <div class="container">
        <h1>ห้างหุ้นส่วนจำกัด ทองประทีป แมชชีนเนอรี่</h1>
        <br><br>
        <p class="content">รับ ออกแบบผลิตชิ้นส่วนเครื่องจกกล งานอะไหล่ งานซ่อมบำรุง งานสร้างเครื่อง รับสร้างเครื่องจักรกลและผลิตชิ้นส่วนเครื่องจักรกลทุกชิ้น รับจ้างกลึง กัด ไส เจียรไนร เจาะเชื่อมประกอบ และซ่อมเครื่องจักรกล รับ ออกแบบผลิตชิ้นส่วนเครื่องจกกล งานอะไหล่ งานซ่อมบำรุง งานสร้างเครื่อง </p> 
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
                <li><a class="scrollanimate" href="#services"><span>บริการของเรา</span></a></li>
                <li><a class="scrollanimate" href="#product"><span>ผลงานของเรา</span></a></li>
                <li><a class="scrollanimate" href="#customer"><span>ลูกค้าของเรา</span></a></li>
                <li><a class="scrollanimate" href="#contact-us"><span>ติดต่อเรา</span></a></li>
              </ul>
            </div>
        </div> 
      </nav>


<!-- Section About -->
   <section id="about" class="container-fluid-nav about">
 
    <div class="container" style="padding:6em 0 20px">
      <div class="col-md-7" style="text-align: left">
      <h2>เกี่ยวกับเรา</h2>
      <p>ห้างหุ้นส่วนจำกัด ทองประทีป แมชชีนเนอรี่ ดำเนินธุรกิจรับจ้างผลิต,ออกแบบชิ้นส่วนเครื่องจักรกล อุตสาหกรรมทุกประเภท ไม่ว่าจะเป็น งานดัดแปลงเครื่องจักร,งานสร้างเครื่องจักรกลตามแบบ ตามวัตถุประสงค์ของผู้ใช้งานการปรึกษาการเพิ่มผลผลิตในกระบวนการผลิต โดยทีมผู้บริหารและบุคลากรที่มีประสบการณ์ในงานมากกว่า 15 ปี โดยมุ่งเน้นผลิตงานให้ลูกค้าเป็นไปตามมาตรฐานสากลให้เหมาะกับการใช้งาน โดนคัดสรรวัสดุและกระบวนการผลิตที่มีประสิทธิภาพสูงสุด โดยคำนึงถึงต้นทุนและประโยชน์สูงสุดที่ลูกค้าได้รับ ในตลอดระยะเวลาที่ผ่านมาเราเห็นปัญหาของลูกค้าในหลากหลายมิติ เราจึงนำปัญหาหลักๆของลูกค้า มาเป็นนโยบายหลักในการทำงาน เพื่อตอบโจทย์ลูกค้าให้มากที่สุด จึงได้รับความไว้วางใจจากลูกค้า ในหลายกลุ่มงาน ตลอดระยะเวลาที่ผ่านมา  เราจะมุ่งพัฒนา ให้ดียิ่งๆขึ้นต่อไป </p>
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

<!--     <div class="container">
      <div class="row-team">          
                               <h3> ทีมงานของเรา </h3> 
                               <br>
                               <div class="owl-carousel owl-theme team">
                                        <div class="item-team">
                                         
                                            <img class="img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร1</h6>
                                            
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร2</h6>
                                                                     
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร3</h6>
                                                                        
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร4</h6>
                                                                            
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร5</h6>
                                                                      
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร6</h6>
                                                                           
                                          </div>
                                        </div>
                                      
                              </div>
              </div>
    </div> -->
   </section>



<!-- Section Team -->
 <section id="team" class="container-fluid-nav team">
  <div class="container">
      <div class="row-team">          
                               <h2> ทีมงานของเรา </h2> 
                               <br>
                               <div class="owl-carousel owl-theme team">
                                        <div class="item-team">
                                         
                                            <img class="img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร1</h6>
                                            
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร2</h6>
                                                                     
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร3</h6>
                                                                        
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร4</h6>
                                                                            
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร5</h6>
                                                                      
                                          </div>
                                        </div>

                                         <div class="item-team">
                                         
                                            <img class="img-fluid img-thumbnail" src="asset/profile.png" alt="">  
                                   
                                          <div class="team-description">
                                             <p>จรัญ ตรีเดชี</p>
                                            <h6>ผู้บริหาร6</h6>
                                                                           
                                          </div>
                                        </div>
                                      
                              </div>
              </div>
    </div>
    </section>




   <!-- Section Services -->
     <section id="services" class="container-fluid services">
      <div class="container">

             <h2>บริการของเรา</h2>
              <!--       <p class="content">บริการให้คำปรึกษาในการทำธุรกิจผู้แทนจำหน่ายรถยนต์และศูนย์บริการรถยนต์มาตรฐาน ทั้งเรื่องการตลาด การก่อสร้าง และการเลือกเครื่องมือ เพื่อประโยชน์สูงสุดของธุรกิจของท่าน</p>
                    <br> -->
                    <div class="row text-center text-lg-left">
          
                            <div class="col-lg-3 col-md-6 col-xs-12">
                                <div class="img-service">
                                  <img class="img-fluid img-thumbnail" src="asset/logo/sketch.png" alt="">
                                </div>
                                <br>
                                <h3> งานผลิตชิ้นส่วน </h3>
                                <p>รับผลิตชิ้นส่วนมอะไหล่เครื่องจักรกลอุตสาหกรรม ผลิตตามแบบตัวอย่าง ตามจำนวนและแบบแมซโปรดักชั่น</p>
                                <button type="button" class="btn" onclick="popup('services1')">เพิ่มเติม</button>   
                                <br><br>   
                            </div>
                
                              <div class="col-lg-3 col-md-6 col-xs-12">
                       
                                <div class="img-service">
                                  <img class="img-fluid img-thumbnail" src="asset/logo/gears.png" alt="">
                                </div>
                               <br>
                                <h3> งานออกแบบ</h3>
                                <p>รับผลิตชิ้นส่วนมอะไหล่เครื่องจักรกลอุตสาหกรรม ผลิตตามแบบตัวอย่าง ตามจำนวนและแบบแมซโปรดักชั่น</p>
                                <button type="button" class="btn" onclick="popup('services2')">เพิ่มเติม</button>   
                                <br><br>                         
                            </div>

                            <div class="col-lg-3 col-md-6 col-xs-12">
                       
                                <div class="img-service">
                                  <img class="img-fluid img-thumbnail" src="asset/logo/tools.png" alt="">
                                </div>
                               <br>
                                <h3> งานซ่อมบำรุงและติดตั้ง </h3>
                                <p>รับผลิตชิ้นส่วนมอะไหล่เครื่องจักรกลอุตสาหกรรม ผลิตตามแบบตัวอย่าง ตามจำนวนและแบบแมซโปรดักชั่น</p>
                                <button type="button" class="btn" onclick="popup('services3')">เพิ่มเติม</button>   
                                <br><br>    

                            </div>

                             <div class="col-lg-3 col-md-6 col-xs-12">
                          
                                 <div class="img-service">
                                  <img class="img-fluid img-thumbnail" src="asset/logo/meeting.png" alt="">
                                </div>
                                <br>
                                <h3> ให้คำปรึกษา </h3>
                                <p>รับผลิตชิ้นส่วนมอะไหล่เครื่องจักรกลอุตสาหกรรม ผลิตตามแบบตัวอย่าง ตามจำนวนและแบบแมซโปรดักชั่น</p>
                                <button type="button" class="btn" onclick="popup('services4')">เพิ่มเติม</button>   
                                <br><br>                          
                            </div>      
                   
                     </div>

        </div>

    </section>



<!-- Section Product -->
   <section id="product" class="container-fluid product">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <div class="container">
                  <h2>ผลงานของเรา</h2>
               <!--   <p class="content"> ทั้งนี้บริษัทฯ ยังได้ขยายสายงานการผลิตเป็นโรงงานตัดด้วยเครื่อง LASER, พับ, ผลิตโครงสร้าง, เชื่อม-ประกอบตู้ MDB, PANEL, ตู้ SIZE ต่าง, โครงสร้างตู้น้ำมัน, ตู้เติมเงินออนไลน์, ล็อคเกอร์ และ Furniture ตามแบบของลูกค้า เป็นต้น โดยมีทีมงานดีไซเนอร์ดูแลเพื่อให้ได้ผลงานที่ให้ตรงใจลูกค้า </p> -->



                  <!-- gallery product -->
                 
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                          <div class="portfolioFilter clearfix">
                           <!--  <a href="#" data-filter="*" class="current">ผลงานทั้งหมด</a> -->
                            <a href="#" data-filter=".webTemplates" class="current">งานผลิตชิ้นส่วน</a>
                            <a href="#" data-filter=".logos">งานออกแบบ</a>
                            <a href="#" data-filter=".drawings">งานซ่อมบำรุงและติดตั้ง</a>
                            <a href="#" data-filter=".ui">ให้คำปรึกษา</a>
                          </div>
                     

                      <div class="portfolioContainer">
                  
                              <div class="ist-col webTemplates">
                                   <a href="https://sv1.picz.in.th/images/2018/12/06/3mHWBy.jpg" data-fancybox="webTemplates">
                                  <figure><img class="img-fluid img-thumbnail" src="https://sv1.picz.in.th/images/2018/12/06/3mHWBy.jpg" alt="image">
                                            <div class="overlay">
                                              <div class="zoom"><i class="fas fa-search"></i></div>      
                                            </div>
                                  </figure>
                                  </a>

                              </div>

                              <div class="ist-col drawings">
                                  <a href="https://sv1.picz.in.th/images/2018/12/06/3m8IG1.jpg" data-fancybox="drawings">
                                <figure><img class="img-fluid img-thumbnail" src="https://sv1.picz.in.th/images/2018/12/06/3m8IG1.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                          </figure>
                              </a>

                              </div>

                              <div class="ist-col webTemplates">
                                  <a href="https://sv1.picz.in.th/images/2018/12/06/3mHdqD.jpg" alt="3mHdqD.jpg" data-fancybox="webTemplates">
                                <figure><img class="img-fluid img-thumbnail" src="https://sv1.picz.in.th/images/2018/12/06/3mHdqD.jpg" alt="3mHdqD.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              <div class="ist-col logos drawings">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/be4b9728308865.55b92edb950fc.jpg" data-fancybox="drawings">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/be4b9728308865.55b92edb950fc.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              <div class="ist-col webTemplates">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/12963199.548365055868a.png" data-fancybox="webTemplates">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/12963199.548365055868a.png" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              <div class="ist-col ui">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/20342607.5434c04b49254.png" data-fancybox="ui">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/20342607.5434c04b49254.png" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              <div class="ist-col drawings">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/b11bbb26474383.555f91fd42584.jpg" data-fancybox="images">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/b11bbb26474383.555f91fd42584.jpg" alt="drawings">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>
                              </div>

                              <div class="ist-col webTemplates">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/14385875.548573dae7a09.jpg" data-fancybox="webTemplates">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/14385875.548573dae7a09.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              <div class="ist-col drawings">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/14569777.5485b3876a1b9.png" data-fancybox="drawings">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/14569777.5485b3876a1b9.png" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                              </figure>
                              </a>

                              </div>
                              <div class="ist-col logos">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/1d854a24500155.5505cccd057a4.jpg" data-fancybox="logos">
                                <figure><img class="img-fluid img-thumbnail" src=" https://mir-s3-cdn-cf.behance.net/projects/202/1d854a24500155.5505cccd057a4.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>
                              <div class="ist-col ui">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/f9b95b26406487.555cc1fded76f.jpg" data-fancybox="ui">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/f9b95b26406487.555cc1fded76f.jpg" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>
                              
                              <div class="ist-col logos">
                                  <a href="https://mir-s3-cdn-cf.behance.net/projects/202/181a7b35469661.Y3JvcCw3NjUsNTk5LDY3LDA.png" data-fancybox="logos">
                                <figure><img class="img-fluid img-thumbnail" src="https://mir-s3-cdn-cf.behance.net/projects/202/181a7b35469661.Y3JvcCw3NjUsNTk5LDY3LDA.png" alt="image">
                                  <div class="overlay">
                                            <div class="zoom"><i class="fas fa-search"></i>
                                            </div>
                                          </div>
                                </figure>
                                </a>

                              </div>

                              

                         </div>
                      </div>
                </div>
               


        </div>>


      
   </section>

                                        


<!-- Section Customer -->
     <section id="customer" class="container-fluid customer">
      <div class="container">

             <h2>ลูกค้าของเรา</h2>

                    <div class="customer-col">

                            <div class="col-lg-4 col-md-6 col-xs-6">
                                <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">                                         
                            </div>

                            <div class="col-lg-4 col-md-6 col-xs-6">                            
                                <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">                          
                            </div>

                            <div class="col-lg-4 col-md-6 col-xs-6">                            
                               <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">            
                            </div>

                            <div class="col-lg-4 col-md-6 col-xs-6">                        
                                <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">               
                            </div>

                            <div class="col-lg-4 col-md-6 col-xs-6">
                                <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">
                            </div>

                            <div class="col-lg-4 col-md-6 col-xs-6">                        
                                <img class="img-fluid img-thumbnail" src="asset/customer/scg.png" alt="">               
                            </div>             
                   
                     </div>

        </div>

    </section>


<!-- Section Contact US -->
   <section id="contact-us" class="container-fluid contact-us">
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
             <!--   <p><i class="fab fa-facebook-square"></i><a id="link" href="https://www.facebook.com/Thongpratheepmahinenery/"> facebook.com/ThongpratheepMahinenery </a></p>
               <p><i class="fab fa-line"></i><a id="link" href="http://line.me/ti/p/~nuttsna"> @tpmlp</a></p> -->
    
            </div>
               
            </div>
        </div>
   </section>


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

  function popup(msgservice){
    if(msgservice == 'services1'){
      title = '<h3><b>งานผลิตชิ้นส่วน<b></h3>' ;
      txt = '<img style="width:30%" src="https://sv1.picz.in.th/images/2018/12/06/3mHWBy.jpg" alt="image"><p style="font-size:15px">-งานผลิตชิ้นส่วน,อะไหล่ ,เครื่องจักรกล อุตสาหกรรม ผลิตตามแบบ,ตัวอย่าง, ตามจำนวน,และแบบแมชโปรดักชั่น<br></p><p style="font-size:15px">-งานเพลา เพลท พูลเล่ย์ รอลเลอร์ พั้น ไดน์ พิน บุช ชาร์ป หน้าแปลน เฮ้าซิ่ง เฟืองโซ่, เฟือง,เฟืองสะพาน, เกลียวหนอน ,ใบมีดตัดโลหะ,งาน หล่อโลหะ ฯลฯเครื่องจักรทั่วไป  ขนาด1ซม.-180ซม.ยาว500ซม.เครื่องจักร ซีเอ็นซี ขนาด1ซม.-20ซม.ยาว75ซม.</p>' ; 
    }
    else if(msgservice == 'services2'){
      title = '<h3><b>งานออกแบบและสร้างเครื่องจักรกล</b></h3>' ;
      txt = '<img style="width:30%" src="https://sv1.picz.in.th/images/2018/12/06/3mHWBy.jpg" alt="image"><p style="font-size:15px"><p style="font-size:15px">-งานออกแบบ,สร้างและผลิตเครื่องจักร,ดัดแปลงเครื่องจักรกล<br></p><p style="font-size:15px">-เครื่องจักรกลผลิตหลังคาเหล็ก,สังกะสี,เครื่องจักรผลิตผสมคอนกรีตสำเร็จ,เครื่องจักรผลิตชิ้นส่วนสปริงที่นอน,ออกแบบและผลิตโปรเจคงาน</p>' ; 
    }else if(msgservice == 'services3'){
      title = '<h3><b>งานซ่อมบำรุงและติดตั้ง</b></h3>' ;
      txt = '<img style="width:30%" src="https://sv1.picz.in.th/images/2018/12/06/3mHWBy.jpg" alt="image"><p style="font-size:15px"><p style="font-size:15px">-ชุดปรับตั้งเครื่องโปรเจคเตอร์ เฟรมยึด แอลอีดี อุปกรณ์ติดตั้ง แสง สี เสียง ในงานจัดการแสดง<br></p><p style="font-size:15px">-งานซ่อมอุปกรณ์ เครื่องมือ ศูนย์บริการรถยนต์ แม่แรง, ลิฟท์ยกรถ,เครื่องตั้งศูนย์,ถ่วงล้อ<br></p><p style="font-size:15px">-งานสร้าง,ซ่อม,อุปกรณ์ และติดตั้งในเรือประมง,เรือสปีดโบ๊ท</p>' ;   
    }else{
      title = '<h3><b>ให้คำปรึกษา</b></h3>' ;
      txt = 'sss' ; 
    }

     swal({
          title: title,
          html:txt,
          confirmButtonText: 'ปิด',
          width:'70%',
        }) ;
    
  }

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



</body>

</html>