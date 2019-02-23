
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

    <section>
    <div class="container">
                <h3> ผลิตด้วยเครื่องจักรทันสมัย และทีมผู้เชี่ยวชาญ</h3>
                <p>ผลิตด้วยเครื่องจักร CNC ที่ทันสมัย</p>
                <nav class="hidden768">
                    <ul id="machinelist" class="vertical menu">
                                               
                            <a href="#milling" data-target="milling" class="color_black_1 hover">
                                <li itemprop="itemListElement" class="machinlist Milling_Machine transition">
                                    <h5 itemprop="name">เครื่องมิลลิ่ง</h5>
                                    <h5>Milling Center Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#lathe" data-target="lathe" class="color_black_1 hover">
                                <li itemprop="itemListElement" class="machinlist Lathe_Machine transition">
                                    <h5 itemprop="name">เครื่องกลึง</h5>
                                    <h5>Lathe Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#internal" data-target="internal" class="color_black_1 hover">
                                <li itemprop="itemListElement" class="machinlist Internal_Machine transition">
                                    <h5 itemprop="name">เครื่องเจียรรูใน</h5>
                                    <h5>Internal Grinding Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#cylindrical" data-target="cylindrical" class="color_black_1 hover">
                                <li itemprop="itemListElement" class="machinlist Cylindrical_Machine transition">
                                    <h5 itemprop="name">เครื่องเจียรกลม</h5>
                                    <h5>Cylindrical Grinding Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#surface" data-target="surface" class="color_black_1">
                                <li itemprop="itemListElement" class="machinlist Surface_Machine transition">
                                    <h5 itemprop="name">เครื่องเจียรราบ</h5>
                                    <h5>Surface Grinding Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#laser" data-target="laser" class="color_black_1">
                                <li itemprop="itemListElement" class="machinlist Laser_Machine transition">
                                    <h5 itemprop="name">เครื่องตัดเลเซอร์</h5>
                                    <h5>Laser Cutting Machine</h5>
                                </li>
                            </a>

                                               
                            <a href="#deburring" data-target="deburring" class="color_black_1">
                                <li itemprop="itemListElement" class="machinlist Deburring_Machine transition">
                                    <h5 itemprop="name">เครื่องลบคมชิ้นงาน</h5>
                                    <h5>Deburring Machine</h5>
                                </li>
                            </a>

                    </ul>
                </nav>
            </div>
    </section>

 <?php include("sec_contact.php")?>
<?php include("footer.php")?>

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

</script>





</body>

</html>