<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>

	<title>Tpmlp</title>

</head>

<body>
    <script type="text/javascript">
    $(document).ready(function() {
   
    $(".container.insidepageprod").addClass("magictime vanishIn"); 
    });
   </script>
	 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">TPMLP</a>
    </div>
  

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav">
          <li><a href="homepage.php">Home</a></li>
          <li class="active"><a href="product.php">Product</a></li>
          <li><a href="customer.php">Customer</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact US</a></li>
        </ul>
      </div>
    </div>
  </nav>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container insidepageprod">
  <h2>Our Product</h2>
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
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                1
            </div>
            <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                2
            </div>

            <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                3
            </div>
            <div class="col-md-3 col-sm-3 thumb">
   
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                4
            </div>
          </div>

    <!-- Type B -->
    <div class="row column B">
        <h4>Type B</h4>
         <div class="col-md-3 col-sm-3 thumb">
              
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                5
            </div>



         <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                6
            </div>
         <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                7
            </div>
         <div class="col-md-3 col-sm-3 thumb">
              
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                8
            </div>
          </div>




    <!-- Type C -->
           <div class="row column C">
            <h4>Type C</h4>
             <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                9
            </div>
            <div class="col-md-3 col-sm-3 thumb">
               
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                10
            </div>
             <div class="col-md-3 col-sm-3 thumb">
              
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Description Item....">
               
                11
            </div>
        </div>
	</div>

 



<!-- The Modal -->
<div id="myModal" class="modal">
 <i class="fas fa-chevron-left"></i>
 <i class="fas fa-chevron-right"></i>
 <i class="fas fa-times"></i>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script type="text/javascript">
            //Image Modal
              // Get the modal
              var modal = document.getElementById('myModal');

              // Get the image and insert it inside the modal - use its "alt" text as a caption
              var modalImg = document.getElementById("img01");
              var captionText = document.getElementById("caption");
              $('img').click(function(){
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;

              }) ;

              // Get the <span> element that closes the modal
              var i = document.getElementsByClassName("fa-times")[0];
              // When the user clicks on <span> (x), close the modal
              i.onclick = function() { 
                  modal.style.display = "none";
              }
              // $('.modal').click(function(){
              //    modal.style.display = "none";
              // }



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
                  console.log(section[i]) ;
                }
             
                 $(".hide").hide(500) ;
                 $(".show").addClass("magictime swashIn") ; 
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
              }
          </script>

      

    

</body>
</html>