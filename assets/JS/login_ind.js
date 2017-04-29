$(function(){ 

	// $(document).ready(function() {
	// 	$('#idBtLang').click(function() {
	// 		$.ajax({
	// 			type : 'POST',
	// 			url : 'index.php/e_sosial/login_ind',
	// 			cache: false
	// 		});
	// 	});
	// });

	$("#show-regis").click(function(){
		$("#form-regis").delay(100).fadeIn(100);
		$("#form-login").fadeOut(100);
		// $("#show-login").removeClass('active');
	})

	$("#show-login").click(function(){
		$("#form-login").delay(100).fadeIn(100);
		$("#form-regis").fadeOut(100);
		// $("#show-regis").removeClass('active');
	})

	$("#caret-rotate").click(function(){
 		$(".rotate").toggleClass("down")  ; 
	})
});