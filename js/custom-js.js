
$( document ).ready(function() {


// Dynamic data-offset-top nav
	var nav=$('#nav');
	var navv=nav[0] ;
	var height=$('header').height()
	$(navv).attr("data-offset-top",height) ;
 //    $('#nav').data-offset({
 //      offset: {
 //        top: $('header').height()
 //      }
	// }); 
	console.log(navv) ;
	
});

