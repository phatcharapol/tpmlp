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



  
 <?php include('nav.php') ?>


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
            <!--    <iframe id="map" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%AB%E0%B8%88%E0%B8%81.%20%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B8%9B%20%E0%B9%81%E0%B8%A1%E0%B8%8A%E0%B8%8A%E0%B8%B5%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3%E0%B8%B5%E0%B9%88%20Phahon%20Yothin%2048%20Alley%2C%20Lane%2060%2C%20Tha%20Raeng%2C%20Bang%20Khen%2C%20Bangkok&key=AIzaSyAiOaOaOqtypn-v_8FVNIoh2fFsUNYJ4_4" allowfullscreen></iframe> -->
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


<?php include("footer.php")?>


<script type="text/javascript">
 

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