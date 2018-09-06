
$( document ).ready(function() {


// Dynamic data-offset-top nav
	var nav=$('#nav');
	var navv=nav[0] ;
	// var height=$('header').height();
	var height = 100;
	$(navv).attr("data-offset-top",height) ;

// Scroll Animate
$( "a.scrollanimate" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 800);
        // $(this).attr("href").addClass(' animated fadeInLeft delay-2s') ;

        // animate section
        var section=($(this).attr("href")) ;
        $(section+' div.container').addClass(' animated bounceInLeft delay-05s') ; ;
        console.log($(section+' container')) ;
    });


	// smooth scroll
	new SmoothScroll();
	function SmoothScroll(el) {
	  var t = this, h = document.documentElement;
	  el = el || window;
	  t.rAF = false;
	  t.target = 0;
	  t.scroll = 0;
	  t.animate = function() {
	    t.scroll += (t.target - t.scroll) * 0.1;
	    if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
	      cancelAnimationFrame(t.rAF);
	      t.rAF = false;
	    }
	    if (el == window) scrollTo(0, t.scroll);
	    else el.scrollTop = t.scroll;
	    if (t.rAF) t.rAF = requestAnimationFrame(t.animate);
	  };
	  el.onmousewheel = function(e) {
	    e.preventDefault();
	    e.stopPropagation();
	    var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
	    t.target += (e.wheelDelta > 0) ? -70 : 70;
	    if (t.target < 0) t.target = 0;
	    if (t.target > scrollEnd) t.target = scrollEnd;
	    if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);
	  };
	  el.onscroll = function() {
	    if (t.rAF) return;
	    t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
	    t.scroll = t.target;
	  };
	}


	// // carousel
 		
 	var owl_about = $('.owl-carousel.about');
		owl_about.owlCarousel({
		    loop:true,
		    margin:10,
		  	items:1,
		  	smartSpeed:800,
		  	autoplay:true,
		  	autoHeight:true	
    		
		});

		

	var owl_product = $('.owl-carousel.product');
		owl_product.owlCarousel({
			loop:true,
		    margin:10,
		    items:3,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:3
		        }
		    }
		});



$(".spinner").delay(2000).fadeOut("slow");

// $(".spinner").show();
	// $(".spinner").delay(9000).hide(10).fadeOut();
	// $("body").show().delay(5000).fadeIn();

		


    
});

