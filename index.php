<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">
<header id="index" class="v-header container">
    <div class="fullscreen-video-wrap">
      <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
      <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
      <video src="https://production.cdmycdn.com/assets/marketing-pages/intensives/bws/coding-scenes-9a2031e8142b40bdb5d936d5eef33dfa.mp4" autoplay="" loop="">
    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1>Welcome Everyone</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
      <a href="#about" class="btn">Find Out More</a>
      </div>
  </header>



<!-- Section About -->
   <div id="about" class="container-fluid-nav about">
      <nav id="nav" class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top=""> 
        <div class="container">  
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="#index">TPMLP</a>
            </div>
            <div class="collapse navbar-collapse topBotomBordersOut" id="navbarNav">
              <ul id="ul-nav" class="nav navbar-nav navbar-right">
                <li><a href="#about"><span>เกี่ยวกับเรา</span></a></li>
                <li><a href="#product"><span>ผลงาน</span></a></li>
                <li><a href="#customer"><span>ลูกค้า</span></a></li>
                <li><a href="#contact-us"><span>ติดต่อ</span></a></li>
              </ul>
            </div>
        </div> 
      </nav>
    <div class="container" style="padding:40px 0 ;">
      <h2>ABOUT US</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
    </div>
   </div>



<!-- Section Product -->
   <div id="product" class="container-fluid product">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <div class="container insidepageprod">
          <h2>OUR PRODUCT</h2>
          <div id="BtnFilter">
              <button type="button" class="btn btn-secondary" onclick="filterSelection('All')">All</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('A')"> Type A</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('B')"> Type B</button>
              <button type="button" class="btn btn-secondary" onclick="filterSelection('C')"> Type C</button>
          </div>
        <!-- Type A -->
            <div class="row column A" style="padding:10px">
                  <h4>Type A</h4>
                    <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/1.jpg" alt="Description Item....1" >
                       
                               1
                    </div>
                    <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/2.jpg" alt="Description Item....2">
                        2
                    </div>

                    <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/3.jpg" alt="Description Item....3">
                        3
                    </div>
                    <div class="col-md-3 col-sm-3 thumb">
           
                            <img class="img-thumbnail" src="asset/product/4.jpg" alt="Description Item....4">
                        4
                    </div>
                  </div>

            <!-- Type B -->
            <div class="row column B">
                <h4>Type B</h4>
                 <div class="col-md-3 col-sm-3 thumb">
                      
                            <img class="img-thumbnail" src="asset/product/5.jpg" alt="Description Item....5">
                        5
                    </div>



                 <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/6.jpg" alt="Description Item....6">
                       
                        6
                    </div>
                 <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/7.jpeg" alt="Description Item....7">
                       
                        7
                    </div>
                 <div class="col-md-3 col-sm-3 thumb">
                      
                            <img class="img-thumbnail" src="asset/product/8.jpg" alt="Description Item....8">
                       
                        8
                    </div>

            </div>




            <!-- Type C -->
                   <div class="row column C">
                    <h4>Type C</h4>
                     <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/9.jpg" alt="Description Item....9">
                        9
                    </div>
                    <div class="col-md-3 col-sm-3 thumb">
                       
                            <img class="img-thumbnail" src="asset/product/10.jpg" alt="Description Item....10">
                        10
                    </div>
                     <div class="col-md-3 col-sm-3 thumb">
                      
                            <img class="img-thumbnail" src="asset/product/11.jpg" alt="Description Item....11">
                       
                        11
                    </div>
                </div>
          </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
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

        </div>

      
   </div>
<!-- Section Customer -->
 <div id="customer" class="container-fluid customer">
    <div class="container">
      <h2>OUR CUSTOMER</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
    </div>
   </div>


<!-- Section Contact US -->
   <div id="contact-us" class="container-fluid contact-us">
        <div class="container">
            <h2>CONTACT US</h2>
            <div class="col-md-6">
                <div class="form-area">  
                    <form role="form">
                    <br style="clear:both">
                                <h3 style="margin-bottom: 25px; text-align: center;">Contact Details</h3>
                        <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                                <div class="form-group">
                                <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                                </div>
                        
                    <center><button type="button" id="submit" name="submit" class="btn btn-primary">Send Your Messages</button></center>
                    </form>
                </div>
             </div>
            <div class="col-md-6">
                <br style="clear:both">
               <h3 style="margin-bottom: 25px; text-align:center;">Direction to our Company</h3>
               <iframe id="map" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%AB%E0%B8%88%E0%B8%81.%20%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B8%9B%20%E0%B9%81%E0%B8%A1%E0%B8%8A%E0%B8%8A%E0%B8%B5%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3%E0%B8%B5%E0%B9%88%20Phahon%20Yothin%2048%20Alley%2C%20Lane%2060%2C%20Tha%20Raeng%2C%20Bang%20Khen%2C%20Bangkok&key=AIzaSyAiOaOaOqtypn-v_8FVNIoh2fFsUNYJ4_4" allowfullscreen></iframe>
            <div class="location">
               <p><h5> Thongpratheep Machinery Ltd.,& Part</h5></p>
               <p><i class="fas fa-home"></i> 43 Paholyothin 48 Yaek 60 Tharang BangKhen Bangkok 10220</p>
               <p><i class="fas fa-map-marker-alt"></i> OPENING HOURS:Monday – Saturday: 8.00 am – 17.00pm [*Sunday only by appointment]</p>
               <p><i class="fas fa-mobile-alt"></i> 0868890226,0894077868</p>
               <p><i class="fas fa-fax"></i> 02-88888888</p>
               <p><i class="fas fa-envelope"></i> tpmlp.work@gmail.com</p>
            </div>
               
            </div>
        </div>
   </div>





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

                </script>


</body>

</html>